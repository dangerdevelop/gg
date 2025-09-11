<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedi Haberleri (Bootstrap)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #7b1fa2 !important; /* Mor renk */
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .jumbotron {
            background-color: #ede7f6; /* Açık mor */
            padding: 4rem 2rem;
            margin-bottom: 2rem;
            border-radius: .3rem;
        }
        .news-card {
            margin-bottom: 1.5rem;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .news-card img {
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px);
            max-height: 250px; /* Resimlerin yüksekliğini sabitleyelim */
            object-fit: cover; /* Resimlerin kutuya sığmasını sağla */
        }
        .news-card-title {
            color: #7b1fa2; /* Mor renk */
        }
        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 1.5rem 0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Kedi Haberleri</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Haberler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="p-5 mb-4 bg-light rounded-3 jumbotron">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Kedi Dünyasından En Yeni Haberler!</h1>
                <p class="col-md-8 fs-4">Kedilerin gizemli dünyasından en ilginç, en şirin ve en bilgilendirici haberleri burada bulabilirsiniz. Her gün güncellenen içeriklerimizle patili dostlarımızın dünyasına bir adım daha yaklaşın.</p>
                <button class="btn btn-primary btn-lg" type="button" style="background-color: #7b1fa2; border-color: #7b1fa2;">Tüm Haberleri Görüntüle</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card news-card">
                    <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?q=80&w=843&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Uyuyan kedi">
                    <div class="card-body">
                        <h5 class="card-title news-card-title">Kedilerin Gizemli Uyku Saatleri</h5>
                        <p class="card-text">Bilim insanları, kedilerin neden günde 16 saate kadar uyuduğunu araştırıyor. Yeni bir çalışmaya göre, bu uzun uyku saatleri avlanma içgüdülerini canlı tutmak için kritik önem taşıyor.</p>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Devamını Oku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card news-card">
                    <img src="https://images.unsplash.com/photo-1574144611937-0130592389d9?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Üzgün kedi">
                    <div class="card-body">
                        <h5 class="card-title news-card-title">Evcil Kedilerde Depresyon Belirtileri</h5>
                        <p class="card-text">Veteriner hekimler, evde yalnız kalan kedilerde depresyon ve anksiyete belirtilerinin arttığına dikkat çekiyor. İştahsızlık, oyun oynamaktan kaçınma ve agresif davranışlar...</p>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Devamını Oku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card news-card">
                    <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?q=80&w=843&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Şirin kedi türleri">
                    <div class="card-body">
                        <h5 class="card-title news-card-title">En Şirin 10 Kedi Türü Açıklandı!</h5>
                        <p class="card-text">Yapılan bir anket sonucunda, en sevimli kedi ırkları listesi belirlendi. Listenin başında Scottish Fold yer alırken, onu Maine Coon ve Siyam kedileri takip ediyor.</p>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Devamını Oku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <div class="container">
            <p>&copy; 2024 Kedi Haberleri. Tüm Hakları Saklıdır.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>