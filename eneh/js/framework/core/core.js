(function (app) {

    app.core = (function () {

        var componentCollection = {}, au = app.utils, aa = app.api;

        return {
            component: function(componentName, callbackArr) {
                var callback = callbackArr.pop();
                var dependenciesArr = callbackArr;
                if (au.isType(componentName, 'string') && au.isType(callback, 'function')) {
                    var obj = callback();
                    if (obj.hasOwnProperty('init') && au.isType(obj.init, 'function') && obj.hasOwnProperty('destroy') && au.isType(obj.init, 'function')) {
                        componentCollection[componentName] = { start: callback, instance: null, dependencies: dependenciesArr };
                        obj = null;
                    }
                }
            },

            start: function(componentName) {
                var component = componentCollection[componentName];
                //TODO implement a locator
                if (component.dependencies.length > 0) {
                    // stubbing api
                    component.instance = component.start(aa.bootstrap(this, componentName));
                } else {
                    component.instance = component.start();
                }
                component.instance.init();
            },

            startAll: function() {
                for (component in componentCollection) {
                    if (componentCollection.hasOwnProperty(component)) {
                        this.start(component);
                    }
                }
            },

            stop: function(componentName) {
                var componentData;
                if (componentData = componentCollection[componentName] && componentData.instance) {
                    componentData.instance.destroy();
                    componentData.instance = null;
                }
            },

            stopAll: function(componentName) {
                for (component in componentCollection) {
                    if (componentCollection.hasOwnProperty(component)) {
                        this.stop(component);
                    }
                }
            },

            restartAll: function() {
                this.stopAll();
                this.startAll();
            },

            restart: function(componentName) {
                if (componentName) {
                    this.stop(componentName);
                    this.start(componentName);
                }
            },

            getComponentInstance: function (componentName) {
                var component = componentCollection[componentName];
                return (component ? component.instance : null);
            },

            eventEmitter: {
                subscribe: function(events, componentName) {
                    if (componentName) {
                        if (componentCollection[componentName]) {
                            componentCollection[componentName].events = events;
                        }
                    }
                },

                unsubscribe: function(events, componentName) {
                    if (componentName && (component = componentCollection[componentName]) && component.events) {
                        delete component.events;
                    }
                },

                publish: function(events) {
                    var component;
                    for (component in componentCollection) {
                        //if (component.hasOwnProperty(component)) {
                        component = componentCollection[component];
                        if (component.events && component.events[events.event]) {
                            //component.events[events.event](events.data);
                            component.events[events.event].call(component.instance, events.data);
                        }
                        //}
                    }

                }

            }

        };

    }());

})(app);