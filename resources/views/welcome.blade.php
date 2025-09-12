<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Balık Haberleri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .hero {
      background: url('https://picsum.photos/1200/400?random=1') center/cover no-repeat;
      color: white;
      padding: 100px 20px;
      text-align: center;
    }
    .news-card img {
      height: 200px;
      object-fit: cover;
    }
    footer {
      background-color: #0d6efd;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Balık Haberleri</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Ana Sayfa</a></li>
          <li class="nav-item"><a class="nav-link" href="#haberler">Haberler</a></li>
          <li class="nav-item"><a class="nav-link" href="#iletisim">İletişim</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <h1>Günün Balık Haberleri</h1>
      <p>En güncel deniz ve balık haberlerini burada bulabilirsiniz.</p>
    </div>
  </section>

  <!-- Haberler -->
  <section id="haberler" class="py-5">
    <div class="container">
      <h2 class="mb-4 text-center">Son Haberler</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card news-card shadow-sm">
            <img src="https://picsum.photos/400/200?random=2" class="card-img-top" alt="Balıkçılar">
            <div class="card-body">
              <h5 class="card-title">Balıkçılar Bereketli Sezon Açtı</h5>
              <p class="card-text">Karadeniz'de balıkçılar bu sezon bol miktarda hamsi avladı.</p>
              <a href="#" class="btn btn-primary btn-sm">Devamını Oku</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card news-card shadow-sm">
            <img src="https://picsum.photos/400/200?random=3" class="card-img-top" alt="Somon">
            <div class="card-body">
              <h5 class="card-title">Somon İhracatı Rekor Kırdı</h5>
              <p class="card-text">Norveç somonu, dünya pazarlarında talep görmeye devam ediyor.</p>
              <a href="#" class="btn btn-primary btn-sm">Devamını Oku</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card news-card shadow-sm">
            <img src="https://picsum.photos/400/200?random=4" class="card-img-top" alt="Mercan Resifi">
            <div class="card-body">
              <h5 class="card-title">Mercan Resifleri Tehlikede</h5>
              <p class="card-text">İklim değişikliği nedeniyle resiflerde ciddi kayıplar yaşanıyor.</p>
              <a href="#" class="btn btn-primary btn-sm">Devamını Oku</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- İletişim -->
  <section id="iletisim" class="py-5 bg-light">
    <div class="container">
      <h2 class="mb-4 text-center">İletişim</h2>
      <form class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Ad Soyad</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" required>
        </div>
        <div class="col-12">
          <label class="form-label">Mesajınız</label>
          <textarea class="form-control" rows="4" required></textarea>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Gönder</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Balık Haberleri. Tüm hakları saklıdır.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>