(function (app) {
    app.utils = (function () {
        return {
            checkType: function (context) {
                return Object.prototype.toString.call(context).match(/^\[object\s(.*)\]$/)[1];
            },

            isType: function (context, type) {
                return app.utils.checkType(context).toLowerCase() == type;
            },

            /**
            * http://stackoverflow.com/a/10997390/11236
            */
            updateURLParameter: function (url, param, paramVal) {
                var newAdditionalURL = "";
                var tempArray = url.split("?");
                var baseURL = tempArray[0];
                var additionalURL = tempArray[1];
                var temp = "";
                if (additionalURL) {
                    tempArray = additionalURL.split("&");
                    for (i = 0; i < tempArray.length; i++) {
                        if (tempArray[i].split('=')[0] != param) {
                            newAdditionalURL += temp + tempArray[i];
                            temp = "&";
                        }
                    }
                }

                var rows_txt = temp + "" + param + "=" + paramVal;
                return baseURL + "?" + newAdditionalURL + rows_txt;
        },

            getOrigin: function () {
                if (!window.location.origin) {
                    window.location.origin = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port : '');
                }
                return window.location.origin;
            }

        };
    }());
})(app);