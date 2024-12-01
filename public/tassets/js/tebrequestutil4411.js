

var TEBURL;
if (!TEBURL) {
    TEBURL = {};
}


TEBURL.UTIL = (function(){

    var addCSRFToken = function(urlParam) {
        if(!urlParam){
            return urlParam;
        }
        var ssct = $('meta[name=ssct]', window.top.document).attr("content");
            if(urlParam.indexOf('ssct') < 0 && urlParam.indexOf('.do') > -1 ){
            if(urlParam.indexOf('.do?') > -1){
                urlParam = urlParam + '&ssct=' + ssct;
            }
            else {
                urlParam = urlParam + '?ssct=' + ssct;
            }
        }
        return urlParam;

    }

    var goToPage = function (urlPath) {
        urlPath = TEBURL.UTIL.addToken(urlPath);
        document.location.href = urlPath;
}
    return {
        addToken: addCSRFToken,
        goToPage: goToPage
    }

})()



$(document).ready(function() {
    var ssct = $('meta[name=ssct]', window.top.document).attr("content");
    if(ssct){
        if(document.forms && document.forms.length) {
            for(var i=0; i<document.forms.length; i++) {
                $(document.forms[i]).append('<input type="hidden" name="ssct" value="' + ssct + '" />');
            }
        }
    }

});

$(document).ready(function() {
    $("iframe").each(function () {
        var ssct = $('meta[name=ssct]', window.top.document).attr("content");
        var src = $(this).attr('src');
        if(ssct && src && src.indexOf(".do") !== -1){
            $(this).attr('src', TEBURL.UTIL.addToken(src));
        }

    });
});



