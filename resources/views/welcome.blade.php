<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tavşan Haberleri</title>
    <style>
        /* Genel sayfa ayarları */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: #f0f8f0;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }

        /* Başlık ve menü alanı */
        header {
            background-color: #5a7d5a;
            color: white;
            padding: 1rem 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        /* Ana içerik alanı */
        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        /* Haber kartları */
        .haber-karti {
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .haber-karti:hover {
            transform: translateY(-5px);
        }

        .haber-karti h2 {
            color: #4a6a4a;
            margin-top: 0;
        }

        .haber-karti img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 1rem;
        }

        /* Dipnot (footer) */
        footer {
            background-color: #4a6a4a;
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

    <header>
        <h1>🐰 Tavşan Haberleri</h1>
    </header>

    <div class="container">
        <div class="haber-karti">
            <h2>Havuç Fiyatları Tavan Yaptı!</h2>
            <p>Son zamanlarda havuç fiyatlarındaki artış, tavşan topluluklarını endişelendiriyor. Uzmanlar, bu durumun kışa hazırlık yapan tavşanların beslenme alışkanlıklarını değiştirebileceğini belirtiyor.</p>
            <p>Özellikle havuç tarlalarında yaşanan son kuraklık, üretimi olumsuz etkiledi. Tavşanlar şimdi alternatif besin kaynaklarına yönelmeye başladı.</p>
            <img src="https://picsum.photos/400/200?random=4" alt="Pahalı havuçlar">
        </div>

        <div class="haber-karti">
            <h2>En Hızlı Sıçrayan Tavşan Yarışması Sonuçlandı</h2>
            <p>Her yıl merakla beklenen "Altın Zıplama" yarışması bu yıl da nefes kesen anlara sahne oldu. Yarışmayı, rakibi "Hızlı Pabuç"u geride bırakan "Tiki" adlı tavşan kazandı.</p>
            <p>Tiki, 100 metreyi sadece 4 saniyede sıçrayarak rekor kırdı. Yarışma sonunda Tiki, ödül olarak bir kasa taze lahana kazandı.</p>
            <img src="https://picsum.photos/400/200?random=4" alt="Tavşan yarışması">
        </div>

        <div class="haber-karti">
            <h2>Kış Uykusuna Yatan Tavşanlara Uyarı!</h2>
            <p>Soğuk havalar yaklaşırken, kış uykusuna hazırlanan tavşanlara uzmanlardan önemli bir uyarı geldi. Yeterli besin depolamadan uykuya geçmenin sağlık sorunlarına yol açabileceği belirtiliyor.</p>
            <p>Tavşanların, kış uykusuna geçmeden önce bol miktarda yulaf ve yonca tüketmeleri öneriliyor.</p>
            <img src="https://picsum.photos/400/200?random=4" alt="Kış uykusu">
        </div>
    </div>

    <footer>
        <p>© 2025 Tavşan Haberleri. Tüm hakları saklıdır.</p>
    </footer>

</body>
</html>