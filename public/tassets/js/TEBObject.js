/**
 * TEB özellikleri için ana taşıyıcı.
 */
var TEB;
if (!TEB) {
    TEB = {};
}

/**
 * Tarayıcı bilgileri
 */
TEB.Browser = (function(){

    var ua = navigator.userAgent;
    var isOpera = Object.prototype.toString.call(window.opera) == '[object Opera]';
    var isTrident = /Trident/.test(ua);
    var isIE = isTrident || (!!window.attachEvent && !isOpera);
    var version;
    if(isIE){
        if( navigator.appName == 'Netscape'){   // IE11+
            if (/rv:11.0/.test(ua)){
                version = "11";
            }
        } else if( navigator.appName == 'Microsoft Internet Explorer'){   // IE10-
            if(ua.indexOf("MSIE 10.0") > -1){
                version = "10";
            }else if(ua.indexOf("MSIE 9.0") > -1){
                version = "9";
            }else if(ua.indexOf("MSIE 8.0") > -1){
                version = "8";
            }else if(ua.indexOf("MSIE 7.0") > -1){
                version = "7";
            }
        }
    }

    var funcGetNewDeviceId = function() {
        var newDeviceId;

        TEB.Service.sync_call("LoginService.createDeviceId",
                              null,
                              function(jsonObject){
                                newDeviceId = jsonObject.result;
                              });

        return newDeviceId;
    };

    var funcUniqueDeviceId = function() {
        var  deviceId = TEB.Storage.get("DeviceId");
        if(deviceId == null || deviceId === undefined) {
            deviceId = funcGetNewDeviceId();
            console.log("deviceId: " + deviceId);
            if(deviceId != null) {
                TEB.Storage.set("DeviceId", deviceId);
            }
        }

        return deviceId;
    }

    var funcGetAnaCihazNo = function() {
            var anaCihazNo = null;

            TEB.Service.sync_call("LoginService.createAnaCihazNo",
                                  null,
                                  function(jsonObject){
                                      anaCihazNo = jsonObject.result;
                                  });

            return anaCihazNo;
        };

        var funcUniqueAnaCihazNo = function() {
            var  anaCihazNo = TEB.Storage.get("AnaCihazNo");
            if(anaCihazNo == null || anaCihazNo === undefined) {
                anaCihazNo = funcGetAnaCihazNo();
                console.log("anaCihazNo: " + anaCihazNo);
                if(anaCihazNo != null) {
                    TEB.Storage.set("AnaCihazNo", anaCihazNo);
                }
            }

            return anaCihazNo;
        }

    return {
        UserAgent:      navigator.userAgent,
        Version:        version,

        IE:             isIE,
        Firefox:        ua.indexOf('Firefox') > -1,
        Opera:          isOpera,
        Chrome:         ua.indexOf('Chrome') > -1,
        WebKit:         ua.indexOf('AppleWebKit/') > -1,
        Gecko:          ua.indexOf('Gecko') > -1 && ua.indexOf('KHTML') === -1,

        uniqueDeviceId: funcUniqueDeviceId,
        anaCihazNo:     funcUniqueAnaCihazNo
    }
})()

/**
 * İşletim Sistemi Bilgileri
 */
TEB.OS = (function(){

    var ua = navigator.userAgent;

    return {
        Windows:  ua.indexOf('Windows') > -1,
        MacOS:    false,// TODO Do Check
        Linux:    false,// TODO Do Check
        Android:  false,// TODO Do Check
        iPhone:   false,// TODO Do Check
        iPad:     false// TODO Do Check
    }

})();

TEB.Storage = (function(){
    // Check for localStorage support.
    var _isLocalStoreSupported = false;
    try {
        if (localStorage) {
            _isLocalStoreSupported = true;
        }
    } catch(e) {
        _isLocalStoreSupported = false;
    }

    var _Set = function(pKey, pValue) {
        if(_isLocalStoreSupported)
        {
            localStorage.setItem(pKey, pValue);
        }
        else // Cookie
        {
            TEB.Storage.Cookie.set(pKey, pValue);
        }
    }

    var _Get = function(pKey) {
        var value
        if(_isLocalStoreSupported)
        {
            value = localStorage.getItem(pKey);
        }
        else // Cookie
        {
            value = TEB.Storage.Cookie.get(pKey);
        }

        return value;
    }

    var _Remove = function(pKey) {
        var value
        if(_isLocalStoreSupported)
        {
            localStorage.removeItem(pKey)
        }
        else // Cookie
        {
            TEB.Storage.Cookie.remove(pKey);
        }

        return value;
    }

    return {
        set: _Set,
        get: _Get,
        remove: _Remove,
        localStoreSupported : _isLocalStoreSupported
    }

})();

TEB.Storage.Cookie = (function(){

    var _SetCookie = function (pKey , cvalue)
    {
        var d = new Date();
        d.setTime(d.getTime()+(1000000*24*60*60*1000));

        var expires = "expires="+d.toGMTString();

        document.cookie = pKey + "=" + cvalue + "; " + expires;
    }

    var _GetCookie = function (cname)
    {
        if(document.cookie == null || document.cookie == "")
        {
            return null;
        }

        var name = cname + "=";
        var ca = document.cookie.split(';');

        for(var i=0; i<ca.length; i++)
        {
            var c = ca[i].trim();
            if (c.indexOf(name)==0) {
                return c.substring(name.length,c.length);
            }
        }

        return null;
    }

    var _RemoveCookie = function (pKey , cvalue)
    {
        document.cookie = pKey + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }

    return {
        set: _SetCookie,
        get: _GetCookie,
        remove: _RemoveCookie
    }
})();

if (!window["console"]) window.console = ({});
if (!console["log"]   ) console.log   = function(args) {};