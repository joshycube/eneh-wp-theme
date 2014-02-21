(function (app) {
    app.api = {
        bootstrap: function (core, componentName) {

            var events = core.eventEmitter,
                utils = app.utils;

            return {
                publish: function (e) {
                    events.publish(e);
                },

                subscribe: function (e) {
                    events.subscribe(e, componentName);
                },

                unsubscribe: function (e) {
                    events.unsubscribe(e, componentName);
                },

                el: componentName,

                utils: utils

            };

        }

    };
})(app);