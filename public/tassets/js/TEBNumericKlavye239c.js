var sRakamSet = "0123456789"; // Rakkam seti
var sRandomRakamSet = sRakamSet; // Randomize edilmiş

var sLanguage = "tr"; // Pinpad'te kullanılan dil.

var KEY_HIDE_DURATION = 100;
var BEKLEYEREK_GIRIS = 0;
var TIKLAYARAK_GIRIS = 1;
//---------------------------------------------------------------------------------------------------------------------

var MAXPSWLEN = 6; // Max şifre uzunluğu

//---------------------------------------------------------------------------------------------------------------------

var keyClick = TIKLAYARAK_GIRIS; // keyClick=1 Buton Tıklama keyClick=0 Buton Üzerinde Bekleme
var newSbt = true; // newSet=false Harf sırası düzenli, newSet=true Harf sırası karışık

var obj; // temp obje
var X, Y; // onmousedown event'inde keypad'in top ve left pozisyonlarını almak için
var over = false; // onmouseover ve onmouseout event flag'i
var keypadVisible = false; // keypad için göster/sakla flag'i
var keypadClose = false; // desteklenmeyen browser'lar iÃ§in keypad oluÅŸturmama flag'i
var actvObj; // Şifre objesi referans obje

var overlapObj; // Hangi objenin üstünde çıkamaz?
var snlTop, snlLeft;

//####################################################################################################################
//-----------------------------------------------------------------------------
// Nasıl giriş yapılacağını belirler.
//-----------------------------------------------------------------------------
function ClickCheckbox(rvalue) {
    if (rvalue) {
        keyClick = BEKLEYEREK_GIRIS;
    } else {
        keyClick = TIKLAYARAK_GIRIS;
    }
}

//-----------------------------------------------------------------------------
// SanalKlavye'yi saklar
//-----------------------------------------------------------------------------
function hideKeypad() {
    debug("hideKeypad()");
    if (document.getElementById("dkeypadnum")) {
        document.getElementById("dkeypadnum").style.display = "none";
    }
}

//-----------------------------------------------------------------------------
// SanalKlavye'yi görünür yapar
//-----------------------------------------------------------------------------
function showKeypad(thisObj) {
    actvObj = thisObj;
    document.getElementById("dkeypadnum").style.display = "block";
}

//==============================================================================
//                   SÜRÜKLEMEYLE İLGİLİ FONKSİYONLAR
//==============================================================================

//-----------------------------------------------------------------------------
// SanalKlavye mouse ile sürüklenmeye başlarken x,y pozisyonlarını alır.
//-----------------------------------------------------------------------------
function startDrag(e) {
    if (over) {
        obj = document.getElementById("dkeypadnum");
        obj = obj.style;
        if (TEB.Browser.IE) {
            X = event.clientX - obj.pixelLeft;
            Y = event.clientY - obj.pixelTop;
        } else {
            X = e.clientX - parseInt(obj.left);
            Y = e.clientY - parseInt(obj.top);
        }
    }

    if (!keypadVisible) {
        hideKeypad();
    }
}

//-----------------------------------------------------------------------------
// SanalKlavye'nin fareyle sürüklenirken farenin yeni konumu için SanalKlavye'yi konumlandırır.
//-----------------------------------------------------------------------------
function drag(e) {
    if(e.which !== 1){
        endDrag();
    }
    if (obj) {
        if (TEB.Browser.IE) {
            obj.pixelTop = event.clientY - Y;
            obj.pixelLeft = event.clientX - X;
        } else {
            obj.left = (parseInt(e.clientX) - X) + "px";
            obj.top = (parseInt(e.clientY) - Y) + "px";
        }
        return false;
    }
}

//-----------------------------------------------------------------------------
// SanalKlavye'nin mouse ile sürüklenmesi bittiğinde SanalKlavye referans objesini siler
//-----------------------------------------------------------------------------
function endDrag() {
    //FIXME debug( "endDrag()");
    obj = null;
}

//==============================================================================
// ÜZERİNDE BEKLEYEREK GİRİŞ FONKSİYONLARI
//==============================================================================
var tm1; // timer objesi

// keypad tuşları üzerinde beklendiğinde şifre alanına tuş değerinin yazılması sağlar
function CallOverEvent(keyvalue) {
    debug("CallOverEvent(" + keyvalue + ")");
    if (keyClick == BEKLEYEREK_GIRIS) {
        // harfi yaz , karakterleri gizle , her tusa basilinca harfleri karistir
        tm1 = setTimeout("AddPass('" + keyvalue + "');hideAllButtons();", KEY_HIDE_DURATION);
    }
}

// keypad tuşları üzerinde beklendiğinde başlatılan şifre alanına tuş değerinin yazılması prosesini bitirir
function CallOutEvent() {
    debug("CallOutEvent()");
    if (keyClick == BEKLEYEREK_GIRIS) {
        clearTimeout(tm1);
        showAllButtons();
    } else {
        // FIXME HA debug('setTimeout("showAllButtons();", KEY_HIDE_DURATION);');
        // FIXME HA setTimeout("showAllButtons();", KEY_HIDE_DURATION);
    }
}


//==============================================================================
// YAZMA FONKSIYONLARI
//==============================================================================

//-----------------------------------------------------------------------------
// Şifre alanına tuş değerinin yazılmasını sağlar
//-----------------------------------------------------------------------------
function AddPass(keyvalue) {
    debug("AddPass(" + keyvalue + ")");
    var f = document.forms[0];

    if(actvObj == null)
        return;

    if (actvObj.value.length < MAXPSWLEN) {
        f.parolaTemp2.value = f.parolaTemp2.value + keyvalue;
        actvObj.value = actvObj.value + '0';
    } else {
        //alert(getMessageKey(sLanguage, 'c.max.parola.uyari'));
    }
    isParolaChanged = true;
}

//-----------------------------------------------------------------------------
// Şifre alanına girilen en sağdaki değeri siler
//-----------------------------------------------------------------------------
function DeletePass() {
    debug("DeletePass()");

    if (actvObj.value.length > 0) {
        var f = document.forms[0];

        f.parolaTemp.value = '';
        f.parolaTemp2.value = '';
        // var pval = actvObj.value;
        // actvObj.value = pval.substr(0, pval.length - 1);
        // actvObj.focus();
    }
}

//------------------------------------------------------------------------------
// Sabitle/Karıştır tuşunun başlığını düzenler
//------------------------------------------------------------------------------
function FixPass() {
    newSbt = !newSbt;
    //SetMixButtonCaption();

    if (newSbt) // Karıştırılmışsa
    {
       sRandomRakamSet = randomize(sRandomRakamSet);
    } else {
       sRandomRakamSet = sRakamSet;
    }
    debug();
    HideShowLetters('1');
}



//------------------------------------------------------------------------------
// Sabitle/Karıştır tuşunun başlığını düzenler
//------------------------------------------------------------------------------
function HideShowLetters(isState) {

    if (isState == "0") {
        hideAllButtons();
    } else {
        showAllButtons();
    }
}

//---------------------------------------------------------------------------------------
// Klavye'yi oluşturalım
//---------------------------------------------------------------------------------------
function SanalKlavye() {
    //var kindex = new Array(42); // karakter setinin index'ini belirler
    //var kbol = new Array(11,22,31); // alfabetik karakter dizisinin ekranda diziliminde her satır sonundaki index'ini belirler
    //var kbol1 = new Array(34,37,40,41); // sayısal karakter dizisinin ekranda diziliminde her satır sonundaki index'ini belirler
    //var rndindex;       // karıştırma işleminde rastgele index'i saklar
    var j = 0;
    var rx, ry; // Rastgele seçilecek X ve Y pozisyon bilgilerini saklar
    var dx = 200; // keypad'in genişliği
    var dy = 250; // keypad'in yüksekliği
    var disarda = true; // keypad'in overlap objenin koordinatları üzerinde olup/olmama flag'i
    var px1; // overlap objenin sol üst köşe x pozisyonu
    var py1; // overlap objenin sol üst köşe y pozisyonu
    var px2; // overlap objenin sağ alt köşe x pozisyonu
    var py2; // overlap objenin sağ alt köşe y pozisyonu


    var maxWidth = $(document).width();
    var maxHeight = $(document).height();

    // FIXME  Burası gözden geçirilecek.
    while (j < 20) {

		ry='180';
		rx='880';
        rx = Math.floor(Math.random() * ((maxWidth) - dx));
        ry = Math.floor(Math.random() * ((maxHeight) - dy));

        disarda = true;

        for (i = 0; i < overlapObj.length; i++) {
            px1 = findPosX(overlapObj[i])
            py1 = findPosY(overlapObj[i]);
            px2 = px1 + overlapObj[i].offsetWidth;
            py2 = py1 + overlapObj[i].offsetHeight;

            if ((((px1 > rx) && (py1 > ry) && (px1 < rx + dx) && (py1 < ry + dy)) ||
                ( (px2 > rx) && (py2 > ry) && (px2 < rx + dx) && (py2 < ry + dy)) ||
                ( (px1 > rx) && (py2 > ry) && (px1 < rx + dx) && (py2 < ry + dy)) ||
                ( (px2 > rx) && (py1 > ry) && (px2 < rx + dx) && (py1 < ry + dy)))) {
                disarda = false;
                break;
            }
        }

        if (disarda)
            break;
        else
            j++;
    }
    
    if(j>19) {
        console.log("20 denemede bulamadı");
    }

    var padHTML = "<div style='position:absolute;top:" + ry + "px;left:" + rx + "px;width:" + dx + "px;height:" + dy + "px;display:none;'"
                +" id='dkeypadnum' name='dkeypadnum' onmouseout='keypadVisible=false;' onmouseover='keypadVisible=true;'><a href='#' class='close-keyboard' onmousedown='keypadVisible=false;' onclick='keypadVisible=false;'><\/a>"
                +'<table class="contTable" border="0" cellpadding="0" cellspacing="0">'
                +'  <tr>'
                +'    <td class="klavyeBox"><table class="klavyeBoxTable" border="0" align="center" cellpadding="0" cellspacing="0" onmouseout="over=false;" onmouseover="over=true;" style="cursor: move;">'
                +'        <td valign="top" align="center"><table class="numberPart" border="0" align="center" cellpadding="0" cellspacing="0">'
                +'          <tr>'
                +'            <td id="sayi1"><\/td>'
                +'            <td id="sayi2"><\/td>'
                +'            <td id="sayi3"><\/td>'
                +'          <\/tr>'
                +'          <tr>'
                +'            <td id="sayi4"><\/td>'
                +'            <td id="sayi5"><\/td>'
                +'            <td id="sayi6"><\/td>'
                +'          <\/tr>'
                +'          <tr>'
                +'            <td id="sayi7"><\/td>'
                +'            <td id="sayi8"><\/td>'
                +'            <td id="sayi9"><\/td>'
                +'          <\/tr>'
                +'          <tr>'                      
                +'            <td class="TEBKlavyeTus"  id="objSabitle" onClick="FixPass();" onmousedown="HideShowLetters(0);" onmouseout="HideShowLetters(1);" onmouseup="HideShowLetters(1);"><img src="assets/img/sanal_klavye/mix.png" alt="" /><\/td>'
                +'            <td id="sayi0"><\/td>'
                +'            <td class="TEBKlavyeTus" onClick="javascript:DeletePass();" onmousedown="javascript:HideShowLetters(\'0\');" onmouseout="javascript:HideShowLetters(\'1\');" onmouseup="javascript:HideShowLetters( \'1\');" ><img src="assets/img/sanal_klavye/del.png" alt="" /><\/td>'
                +'          <\/tr>'   
                +'        <\/table><\/td>'
                +'     <\/tr>'                
                +'    <tr>'
                +'    <td colspan=3 width="145" style="background-color: #00b04b;"><table border="0" cellpadding="0" cellspacing="0"  >'
                +'       <tr>'
                +'        <td align="center" valign="middle" width="30">'
                +'          <input type="checkbox" tabindex="-1" id="kclick" name="kclick" ' + ((keyClick == BEKLEYEREK_GIRIS) ? "checked" : "") + ' onclick="javascript:ClickCheckbox(this.checked);" style="width:20px; cursor: pointer; height:20px; margin:0; vertical-align: middle" />'
                +'        <\/td>'
                +'        <td align="left" valign="middle"><label for="kclick" style="color: #ffffff; cursor: pointer; font-size: 12px; font-family: Tahoma">' + getMessageKey(sLanguage, 'c.sk.bekleyerek.giris.num') + '<\/label><\/td>'
               +'            <tr height="20">&nbsp;<\/tr>'
                +'       <\/tr>'
                +'       <\/table><\/td>'
                +'      <\/tr>'
                +'    <\/table><\/td>'
                +'  <\/tr>'
                +'<\/table>'
                +'<\/div>'

    $("body").append(padHTML);

    document.getElementById("dkeypadnum").style.top = ry + "px";
    document.getElementById("dkeypadnum").style.left = rx + "px";
    document.getElementById("dkeypadnum").style.width = dx + "px";
    document.getElementById("dkeypadnum").style.height = dy + "px";


    // Başlangıçta karıştırma açıksa önce karıştıralım
    debug("newSbt=" + newSbt);
    if (newSbt) {
        sRandomRakamSet = randomize(sRandomRakamSet);
    } else {
        sRandomRakamSet = sRakamSet;
    }

    drawSayi();
}

//-----------------------------------------------------------------------------
// keypad tuşlarına basıldığında şifre alanına tuş değerinin yazılması sağlar
//-----------------------------------------------------------------------------
function ClickEvent(keyvalue) {

    debug("ClickEvent(" + keyvalue + ")");

    if (actvObj != null) {
        if (keyClick) {
            AddPass(keyvalue);

            if (actvObj.value.length > MAXPSWLEN) {
                alert(getMessageKey(sLanguage, 'c.max.parola.uyari'));
            }
        } else {
            alert(getMessageKey(sLanguage, 'c.sk.bek.giris.yap.num'));
        }
    }

    debug("newSbt=" + newSbt);
    if (newSbt == 1) {
        debug("keyClick ==" + TIKLAYARAK_GIRIS);
        
        sRandomRakamSet = randomize(sRandomRakamSet);
        
    }

    debug(sRandomRakamSet);

    clearTimeout(tm1);
    tm1 = setTimeout("showAllButtons();", KEY_HIDE_DURATION);
    debug("clearTimeout();setTimeout(\"showAllButtons();\", KEY_HIDE_DURATION);");
}

//-----------------------------------------------------------------------------
// Bir objenin X koordinatlarını bulmaca
//-----------------------------------------------------------------------------
function findPosX(pObj) {
    var curleft = 0;
    if (pObj.offsetParent) {
        while (pObj.offsetParent) {
            curleft += pObj.offsetLeft
            pObj = pObj.offsetParent;
        }
    } else if (pObj.x) {
        curleft += pObj.x;
    }

    return curleft;
}

//-----------------------------------------------------------------------------
// Bir objenin X koordinatlarını bulmaca
//-----------------------------------------------------------------------------
function findPosY(pObj) {
    var curtop = 0;
    if (pObj.offsetParent) {
        while (pObj.offsetParent) {
            curtop += pObj.offsetTop
            pObj = pObj.offsetParent;
        }
    } else if (pObj.y) {
        curtop += pObj.y;
    }

    return curtop;
}


//-----------------------------------------------------------------------------
// Bir objenin X koordinatlarını bulmaca
//-----------------------------------------------------------------------------
function debug(msg) {
    // console.log(msg);
}

//-----------------------------------------------------------------------------
// Sayıları pinpadteki yerlerine koyar.
//-----------------------------------------------------------------------------
function drawSayi() {
    for (var iSay = 0; iSay < sRandomRakamSet.length; iSay++) {
        var sRakkam = sRandomRakamSet.substr(iSay, 1);
        var oTD = document.getElementById("sayi" + iSay);

        var imagePos = (-30) * sRakkam;
        
        oTD.innerHTML = '<div onmouseout="CallOutEvent(\'' + sRakkam + '\');" '
                          + ' onmouseover="CallOverEvent(\'' + sRakkam + '\');" '
                          + ' onmousedown="HideShowLetters(0);ClickEvent(\'' + sRakkam + '\');" '
                          + ' class="TEBKlavyeTus"'
                          + ' style="background: url(assets/img/sanal_klavye/tuslar-num.png) 0 ' + imagePos + 'px;" ' + '/>';
    }
}


//-----------------------------------------------------------------------------
// aData.length değişne atılmamalı çünkü aData'nın boyu değişiyor.
//-----------------------------------------------------------------------------
function randomize(aData) {
    var tmpRandom = "";
    while (aData.length > 0) {
        var rnd = Math.ceil(Math.random() * aData.length) - 1;
        var sRakkam = aData.substr(rnd, 1);
        tmpRandom = tmpRandom + sRakkam;
        aData = aData.substr(0, rnd) + aData.substr(rnd + 1, aData.length - rnd);
    }

    return tmpRandom;
}

//-----------------------------------------------------------------------------
// Tüm tuşların yerine boşlarını koyar.
//-----------------------------------------------------------------------------
function hideAllButtons() {
    debug("hideAllButtons()");
    var iSay;
    var oTD;

    // Sayılar
    for (iSay = 0; iSay < sRandomRakamSet.length; iSay++) {
        oTD = document.getElementById("sayi" + iSay);
        $(oTD).find("div").css("background","none");
    }
}

//-----------------------------------------------------------------------------
// Tüm tuşların yerine tekrar koyar.
//-----------------------------------------------------------------------------
function showAllButtons() {
    debug("showAllButtons()");
    drawSayi();
}

//==============================================================================
// INIT
//==============================================================================

document.onmousedown = startDrag;
document.onmousemove = drag;
document.onmouseup = endDrag;