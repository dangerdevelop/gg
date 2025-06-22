/**
 * TEB özellikleri için ana taşıyıcı.
 */
var TEB;
if (!TEB) {
    TEB = {};
}

/**
 * Servis call
 */
TEB.Service = (function(){
    var funcDefaultErrCallBack = function(jsonObject){
       alert(jsonObject.resultMessage);
    }

    var asyncCaller = function(pServisName, pData, pfSuccCallBack, pfErrCallBack, pfCompleteCallBack)
    {
        funcCall(pServisName, pData, pfSuccCallBack, pfErrCallBack, pfCompleteCallBack, true);
    }

    var syncCaller = function(pServisName, pData, pfSuccCallBack, pfErrCallBack, pfCompleteCallBack)
    {
        funcCall(pServisName, pData, pfSuccCallBack, pfErrCallBack, pfCompleteCallBack, false);
    }

    var funcCall = function(pServisName, pData, pfSuccCallBack, pfErrCallBack, pfCompleteCallBack, async)
    {
        var sUrl = "service/" + pServisName;
        var data = "isAjax=true";
        //
        var tokenElement = $('#org\\.apache\\.struts\\.taglib\\.html\\.TOKEN');
        var tokenParam = "&org.apache.struts.taglib.html.TOKEN=";
        var ssctValue = $('meta[name=ssct]', window.top.document).attr("content");
        var ssctParam = "&ssct=";

        if (tokenElement.length > 0){
           data += tokenParam + tokenElement.val();
        }
        if(ssctValue) {
            data += ssctParam + ssctValue;
        }
        //
        if(pData != null && pData != "") {
            data += "&service=" + encodeURIComponent(pData);
        }
        if (typeof console != "undefined" && typeof console.log != "undefined" && false)
        {
            console.log("async:" + async);
            console.log("   url:" + sUrl);
            console.log("   data:" + data);
        }
        jQuery.ajax({
            url  : sUrl,
            type : "post",
            data : data,
            async : async,
            success : function (responseData) {
                var obj = jQuery.parseJSON(responseData);

                //console.log("end[success]:");
                //console.log("    responseData:" + responseData);

                if(obj.resultCode == "1")
                {
                    pfSuccCallBack(obj);
                }
                else if(obj.resultCode == "0")
                {
                    if (pfErrCallBack == null) {
                        funcDefaultErrCallBack(obj);
                    } else {
                        pfErrCallBack(obj);
                    }
                }
                else if(obj.resultCode == "-1")
                {
                    if (pfErrCallBack == null) {
                        funcDefaultErrCallBack(obj);
                    } else {
                        pfErrCallBack(obj);
                    }
                }
            },
            complete : function (responseData) {
                if(pfCompleteCallBack != null){
                    pfCompleteCallBack();
                }
            }
        });
    }

    return {
        call: asyncCaller,
        sync_call: syncCaller,
        errCallBack: funcDefaultErrCallBack,
        errCallBackNoop: function(jsonObject){}
    }
})()
