<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampanya Haberleri</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
        }
        .navbar {
            margin-bottom: 50px;
        }
        .jumbotron {
            background-color: #f8f9fa;
        }
        .section-title {
            margin: 50px 0 30px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Kampanya Haberleri</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#campaigns">Campaigns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <header id="home" class="jumbotron text-center">
        <div class="container">
            <h1 class="display-4">Hoşgeldiniz</h1>
            <p class="lead">En son kampanya haberleri ve duyuruları burada bulabilirsiniz.</p>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container">
        <h2 class="section-title text-center">Hakkımızda</h2>
        <p>Biz, en yeni kampanyaları ve haberleri size sunmak için çalışan bir ekibiz. Amacımız, müşterilerimize en güncel ve avantajlı kampanyaları sunarak, alışveriş deneyimlerini daha keyifli hale getirmektir.</p>
    </section>

    <!-- Campaigns Section -->
    <section id="campaigns" class="container">
        <h2 class="section-title text-center">Kampanyalar</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Kampanya 1">
                    <div class="card-body">
                        <h5 class="card-title">%50 İndirim Garantili Alışveriş</h5>
                        <p class="card-text">Sadece bu hafta sonu, tüm ürünlerde kesin %50 indirim fırsatını kaçırmayın!</p>
                        <a href="#" class="btn btn-primary">Daha Fazla</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Kampanya 2">
                    <div class="card-body">
                        <h5 class="card-title">Kesin Kazançlı Çekiliş Fırsatı</h5>
                        <p class="card-text">Her 100 TL'lik alışverişinize çekiliş hakkı kazanın ve garantili ödüller kazanma şansı elde edin!</p>
                        <a href="#" class="btn btn-primary">Daha Fazla</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Kampanya 3">
                    <div class="card-body">
                        <h5 class="card-title">Garantili Ücretsiz Kargo</h5>
                        <p class="card-text">250 TL ve üzeri alışverişlerinizde, ücretsiz kargo fırsatından yararlanın. Kesinlikle ücretsiz!</p>
                        <a href="#" class="btn btn-primary">Daha Fazla</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container">
        <h2 class="section-title text-center">İletişim</h2>
        <p class="text-center">Bizimle iletişime geçmek için aşağıdaki formu doldurun.</p>
        <form>
            <div class="form-group">
                <label for="name">Adınız</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email adresiniz</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mesajınız</label>
                <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; 2024 Kampanya Haberleri. Tüm hakları saklıdır.</p>
        </div>
    </footer>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
