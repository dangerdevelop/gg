var hataSay;

function clearErrors(){
    hataSay = 0;
    $(".error-list").hide();
    $(".error-list ul").empty();

    $(".error").removeClass("error");
}

function addError(alan, mesaj){
    hataSay++;

    if(mesaj != null && mesaj != "null" && mesaj != "") {
        $(".error-list ul").append("<li>" + mesaj + "<\/li>")
    }

    var tagName = alan.tagName;
    if( tagName == "INPUT" )
    {
        var  element = $(alan);
        if(element.hasClass("hiddendatefield")){
            element.parent().addClass("error")
        }else if(element.hasClass("hiddenpopupfield")){
            element.parent().addClass("error")
        }else if(element.hasClass("custom")){
            element.parent().addClass("error")
        }else if(element.parent().parent().hasClass("account-select")){
            element.parent().parent().addClass("error");
        }else {
            element.addClass("error");
        }
    }
    else if( tagName == "SELECT" )
    {
        var selectElement = $("select[name=" + alan.name + "]");
        selectElement.addClass("error");
        var thisId = $(selectElement).attr('id');
        var errorSelect = $('#' + thisId + '-button');
        errorSelect.addClass('error');
    }
    else if( tagName == "TEXTAREA" )
    {
        var textareaElement = $("textarea[name=" + alan.name + "]");
        textareaElement.addClass("error");
    }else {
        if($(alan).prop("tagName") == 'A'){
            $(alan).addClass("error");
        }
    }

    $(".error-list").show()
}

function isErrorExists(){
    if(hataSay > 0 ) {
        $("html, body").animate({ scrollTop: '0' }, 400);
        return true;
    }

    return false;
}

function popUpVSign()
{
    sealWin=window.open("https://sealinfo.websecurity.norton.com/splash?form_file=fdf/splash.fdf&type=GOLD&sealid=2&dn=ESUBE.TEB.COM.TR&lang=tr","win",'toolbar=0,location=0,directories=0,status=1,menubar=1,scrollbars=1,resizable=1,width=580,height=450');
    self.name = "mainWin";
}

var mevduatOranTabs = [
    {url:TEBURL.UTIL.addToken("MevduatOran.do?page=detay&paraKodu=TL&iframe=E"), title:"TL" },
    {url:TEBURL.UTIL.addToken("MevduatOran.do?page=detay&paraKodu=USD&iframe=E"),title:"USD"},
    {url:TEBURL.UTIL.addToken("MevduatOran.do?page=detay&paraKodu=EUR&iframe=E"),title:"EUR"}
];

function showLightBox(id, title, tabs, content, style){
    if( typeof(content) === "undefined" ) {
        content = "";
    }

    if( $(".lt-overlay .black").length == 0 ){
        $('body').append('<div class="lt-overlay black"><\/div>');
    } else{
        $(".lt-overlay .black").last().css("display","block");
    }

    var selector = "#" + id;
    if( $(selector).length != 0 ){
        $(selector).remove();
    }

    var tabList="";
    for(var i=0; i<tabs.length; i++){
        tabList = tabList + '<li><a href="'+tabs[i].url+'">'+tabs[i].title+'<i><\/i><\/a><\/li>'
    }

    var tabContent = ''+
    '<div id="'+ id + '" class="lightbox">'+
        '<a href="" class="lt-closed"><\/a>'+
        '<div class="lt-content">'+
            '<div class="lt-heading">'+
                '<span class="title">' + title + '<\/span>'+
            '<\/div>'+
            '<div class="lt-tabs-container">'+
                '<ul class="lt-tabs tabs">'+
                    tabList +
                '<\/ul>'+
                content+
            '<\/div>'+
        '<\/div>'+
    '<\/div>';

    $('body').append(tabContent);

    $(".lt-closed").click(function(){
        $(".lt-overlay, .lightbox").fadeOut();

        $.each($("video"),function(){
            this.pause(); // Videolar dursun.
        });
        return false;
    });

    var tab = $(selector + " .lt-tabs-container").tabs();
    if(style){
        tab.find(".ui-tabs-panel").css(style);
    }
}

function showOnayLightBox(id, title, msg, continueFunc, cancelFunc)
{
    if(!cancelFunc){
        cancelFunc = "defaultCancelFunc('" + id + "');";
    }
    var content = ''+
    '<div id="'+ id + '" style="display:none;">' +
        '<div class="lt-overlay black"><\/div>' +
        '<div id="card-max-day" class="lightbox card-max-day">' +
            '<a href="#" class="lt-closed"><\/a>' +
            '<div class="lt-content">' +
                '<div class="title">' + title + '<\/div>' +
                '<div class="error-list fullW successful">' +
                    '<div class="title">' + msg + '<\/div>' +
                '<\/div>' +
                '<button class="continue-btn" onclick="' + continueFunc + '">' + getMessageKey(language, 'button.tamam') + '<\/button>' +
                '<button class="iptal-btn" onclick="' + cancelFunc + '">' + getMessageKey(language, 'button.vazgec') + '<\/button>' +
            '<\/div>' +
        '<\/div>' +
    '<\/div>';

    $('body').append(content);

    $(".lt-closed").click(function(){
        $('#'+ id + ' .lt-overlay, #'+ id + ' .lightbox').fadeOut();
        $('#'+ id).remove();
        return false;
    });

    $('#'+ id ).show();
    $('#'+ id + ' .successful').show();
    $('#'+ id + ' .lt-overlay, #'+ id + ' .lightbox').fadeIn();
}

function defaultCancelFunc(id){
    $("#"+ id + " .lt-overlay, #"+ id + " .lightbox").fadeOut();
    return false;
}

function showIlceLightBox(pIlKod, pTargetId, pTargetName) {
    var title = getMessageKey(language, 'h.ilce.sec');
    var tabTitle = getMessageKey(language, 'c.ilce.list');

    var url = url_path + "/IlceSecim.do?ilKod=" + pIlKod + "&targetId="+ pTargetId + "&targetName=" + pTargetName;
    var tabs = [
        {url:url, title:tabTitle}
    ];

    showLightBox("mevFaizOranBox", title, tabs, "", {"height": "350px","overflow": "auto"});
}

function updateHeaderInfo(){
    var updateHeaderPart = function (pResponse){
        var info = pResponse.result;
        console.log(info);
        if( info.kart != null ) {
            $(".assets").find(".kart").html(info.kartLimit.formatTutar());
        }

        if( info.hesap != null ) {
            var hesap = new TEB.Model.Hesap();
            hesap.parseRadio(info.hesap);


            var newHTML =  info.hesapBakiye.formatTutar() + " <span>" + hesap.paraKod + "<\/span>";
            $(".assets").find(".hesap").html(newHTML)
        }
    }

    TEB.Service.call('HeaderService.fetchInfo', null, updateHeaderPart, TEB.Service.errCallBackNoop);
}

var funcNoop = function(pResultObj){};
var funcBasarili = function(pResultObj){
    var popupbasarili = '<div class="lt-overlay black"><\/div>' +
                        '<div id="video" class="lightbox sendMail">' +
                            '<a class="lt-closed"><\/a>' +
                            '<div class="lt-content">' +
                                '<div class="title">' + getMessageKey(language, 'c.mesajiniz') + '<\/div>' +
                                '<div class="error-list fullW successful">' +
                                    '<div class="title"> ' +  pResultObj.result + '<\/div>' +
                                '<\/div>' +
                           ' <\/div>' +
                        '<\/div>';

     $('body').append(popupbasarili);

    $(".lt-closed").click(function(){
        $(".lt-overlay, .lightbox").fadeOut();
        return false;
    });
}

var funcHatali = function(pResultObj){
    funcHataliGenel(pResultObj.resultMessage);
}

var funcHataliGenel = function(resultMsg){
      var popuphata =   '<div class="lt-overlay black"><\/div>' +
                        '<div id="video" class="lightbox sendMail">' +
                            '<a class="lt-closed"><\/a>' +
                            '<div class="lt-content">' +
                                '<div class="title">' + getMessageKey(language, 'c.mesajiniz') + '<\/div>' +
                                '<div class="error-list fullW unsuccessful">' +
                                    '<div class="title"> ' +  resultMsg + '<\/div>' +
                                '<\/div>' +
                            '<\/div>' +
                        '<\/div>';

     $('body').append(popuphata);

    $(".lt-closed").click(function(){
        $(".lt-overlay, .lightbox").fadeOut();
        return false;
    });
}

function hesapSec(fieldName, subeno, hesno){
    var accountList = $('[data-field-name="' + fieldName + '"] .account');

    $(accountList).each(function() {
        var hesapFields = $(this).find(".data-fields").data('radio').split('|');
        var tempsubeno = hesapFields[1];
        var temphesno = hesapFields[3];

        if(subeno == tempsubeno && hesno == temphesno){
            $(this).click();
        }
    });
}

function kartSec(fieldName, kartno){
    var kartList = $('[data-field-name="' + fieldName + '"] .account');

    $(kartList).each(function() {
        var kartFields = $(this).find(".data-fields").data('radio').split('|');
        var tempkartno = kartFields[0];

        if(kartno == tempkartno){
            $(this).click();
        }
    });
}

function openPopup(url){// generic teyid icin
    var content = '<div id="tabcontentpage" style="display:none">' +
                       '<div id="text-tab" class="lt-tab-content">' +
                           '<div class="content"><\/div>' +
                       '<\/div>' +
                   '<\/div>';

    $('body').append(content);

    showLightBox("pagecontent", getMessageKey(language, 'c.bilgi'), [], $("#tabcontentpage").html());
    $("#pagecontent .content").html("<iframe src='" + url + "' width='100%' height='307px'><\/iframe>")
}

function openVideoChat(){
    var url = "VideoChat.do";
    url = TEBURL.UTIL.addToken(url);
    window.open(url,"VideoChatWindow","toolbar=0,location=0,directories=0,status=1,menubar=1,resizable=1,width=1000,height=586,scrollbars=0");
    return false;
}

function hesapFiltrele(obj, id){

    clearErrors();
    var i = 0;
    var borcluHesapRadio = "";
    var aliciHesapRadio = "";
    var hesapVar = false;
    var seciniz = getMessageKey(language, "c.hesap.seciniz");
    var aliciHesapYok = getMessageKey(language, "e.ayni.pkodlu.hesap.yok");

    var data = $(obj).find("data")[0];
    if(typeof data !== 'undefined'){
        borcluHesapRadio = data.getAttribute('data-radio');
    } else {
        throw new Error("account filter failed.");
    }

    var borcluHesapParakod = borcluHesapRadio.split("|")[2];
    var hesapList = $("#" + id + " .account-menu .account-group.hesap .account");

    try {
        for(i = 0; i < hesapList.length; i++){
            $(hesapList[i]).css("display", "none");
        }

        for(i = 0; i < hesapList.length; i++){
            var temp = $(hesapList[i]).find("data")[0];
            var dRadio = temp.getAttribute('data-radio');
            var pKod = dRadio.split("|")[2];
            if(dRadio != borcluHesapRadio && pKod == borcluHesapParakod){
                $(hesapList[i]).css("display", "block");
                hesapVar = true;
            }
        }

        var aliciHesap = $("#" + id + " .account-menu").find("[name=aliciHesap][type=hidden]")[0];
        if(typeof aliciHesap !== 'undefined'){
            aliciHesapRadio = $(aliciHesap).val();
        }

        if(!hesapVar){
            $("#" + id).css("display", "none");
            addError($(obj).parent().parent().find("[name=borcluHesap]")[0], aliciHesapYok);
            $($("div.heading")[1]).css("display", "none");
        } else {
            $("#" + id).css("display", "block");
            $($("div.heading")[1]).css("display", "block");
        }

        var aliciHesapParakod = aliciHesapRadio.split("|")[2];
        if(borcluHesapParakod != aliciHesapParakod || borcluHesapRadio == aliciHesapRadio){
            $(aliciHesap).val("");
            var seciliHesap = $("#" + id + " .selected.account")[0];
            $(seciliHesap).empty();
            $(seciliHesap).append("<div class='choose'>" + seciniz + "</div>");
        }
    } catch(err) {
        //throw err;
        for(i = 0; i < hesapList.length; i++){
            $(hesapList[i]).css("display", "block");
        }
        $("#" + id).css("display", "block");
        $($("div.heading")[1]).css("display", "block");
    }
}


function changeListView(){
    var getLayoutConfig = function(jsonObj){
        var layoutConf = jsonObj.result;
        if(layoutConf.listeEH == 'E'){
            $('#boxList').removeClass("active");
            $('#tableList').addClass("active");
            $("#accountListBoxes").hide();
            $("#draggabletListBoxes").hide();
            $("#accountListTable").show();
            $("#accountListaddNewBox").show();
        }else{
            $('#tableList').removeClass("active");
            $('#boxList').addClass("active");
            $("#accountListTable").hide();
            $("#accountListBoxes").show();
            $("#draggabletListBoxes").show();
            $("#accountListaddNewBox").hide();
        }
    }
    TEB.Service.call('LayoutService.fetchLayoutConfig', null, getLayoutConfig, TEB.Service.errCallBackNoop);
}

// IBAN FORMAT
function formatValue(value, ibanPrefix) {
    value = value.replace(/\s+/g, ''); // Boşlukları kaldır.
    if (!value.startsWith(ibanPrefix)) {
        value = ibanPrefix + value.replace(ibanPrefix, ''); //Eğer başında TR/CT yoksa ekle.
    }
    return ibanPrefix + value.substring(2).replace(/[^0-9]/g, '').substr(0, "TR" == ibanPrefix ? 24 : 26); // İlk iki karakterden sonra sadece sayıları kabul et.
}

function formatIBAN(value) {
    return value.match(/.{1,4}/g).join(' ').toUpperCase(); // Her 4 karakterden sonra boşluk ekle.
}

function isControlKey(event) {
    return ['Backspace', 'ArrowLeft', 'ArrowRight', 'Delete', 'Tab'].includes(event.key) || event.ctrlKey || event.metaKey;
}

function inputIBANFormatListener(ibanInput){

    ibanInput.addEventListener('input', handleInput);
    ibanInput.addEventListener('paste', handlePaste);
    ibanInput.addEventListener('keydown', handleKeyDown);

    function handleInput(event) {
        let value = formatValue(event.target.value, ibanPrefix);
        event.target.value = formatIBAN(value);
    }
    function handlePaste(event) {
        event.preventDefault();
        let pasteData = (event.clipboardData || window.clipboardData).getData('text');
        let value = formatValue(pasteData, ibanPrefix);
        setTimeout(() => {
            ibanInput.value = formatIBAN(value);
        }, 0);
    }
    function handleKeyDown(event) {
        if (ibanInput.selectionStart < 2 && !isControlKey(event)) { // İlk iki karakteri değiştirmeyi engelle.
            event.preventDefault(); // Prevent changing the prefix
        }
    }
}
