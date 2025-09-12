<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meyve Haberleri</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0fff0; /* Açık yeşil arka plan */
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }

        header {
            background: #4caf50; /* Yeşil */
            color: #fff;
            padding: 40px 0;
            text-align: center;
            border-bottom: 5px solid #388e3c;
        }

        header h1 {
            margin: 0;
            font-size: 3em;
            letter-spacing: 2px;
        }

        .news-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }

        .news-article {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 100%;
            max-width: 350px;
            transition: transform 0.3s ease-in-out;
        }

        .news-article:hover {
            transform: translateY(-10px);
        }

        .news-article img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .news-content {
            padding: 20px;
        }

        .news-content h2 {
            color: #4caf50;
            margin-top: 0;
            font-size: 1.5em;
        }

        .news-content p {
            font-size: 0.9em;
            line-height: 1.6;
        }

        .read-more {
            display: inline-block;
            margin-top: 15px;
            color: #4caf50;
            text-decoration: none;
            font-weight: bold;
            border-bottom: 2px solid transparent;
            transition: border-bottom 0.3s ease;
        }

        .read-more:hover {
            border-bottom: 2px solid #4caf50;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <h1>Meyve Dünyasından En Taze Haberler</h1>
            <p>Mevsimlik meyvelerden, sağlık faydalarına, ilginç tariflere...</p>
        </div>
    </header>

    <div class="container">
        <section class="news-section">

            <article class="news-article">
                <img src="https://images.pexels.com/photos/1039867/pexels-photo-1039867.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Taze çilekler">
                <div class="news-content">
                    <h2>Çilek Sezonu Başladı: En Tatlı Çilekler Nerede Yetişir?</h2>
                    <p>Yaz aylarının vazgeçilmezi çilekler tezgahlardaki yerini aldı. Uzmanlar, en lezzetli ve sulu çileklerin hangi bölgelerde yetiştiğini açıkladı.</p>
                    <a href="#" class="read-more">Devamını Oku</a>
                </div>
            </article>

            <article class="news-article">
                <img src="https://images.pexels.com/photos/1231881/pexels-photo-1231881.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Ananas">
                <div class="news-content">
                    <h2>Tropikal Meyvelerin Kış Depresyonuna Etkisi</h2>
                    <p>Mango, ananas ve papaya gibi tropikal meyvelerin yüksek C vitamini ve antioksidan içeriği sayesinde kış aylarında ruh halimizi nasıl iyileştirebileceği ortaya çıktı.</p>
                    <a href="#" class="read-more">Devamını Oku</a>
                </div>
            </article>

            <article class="news-article">
                <img src="https://images.pexels.com/photos/1039867/pexels-photo-1039867.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Nar ve üzüm">
                <div class="news-content">
                    <h2>Antioksidan Deposu: Nar ve Üzümün Bilinmeyen Faydaları</h2>
                    <p>Yapılan yeni bir araştırmaya göre nar ve üzüm, kalp sağlığından cilt gençleşmesine kadar pek çok alanda mucizevi etkiler gösteriyor.</p>
                    <a href="#" class="read-more">Devamını Oku</a>
                </div>
            </article>
            
            <article class="news-article">
                <img src="https://images.pexels.com/photos/1231881/pexels-photo-1231881.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Limon ve narenciye">
                <div class="news-content">
                    <h2>Narenciye Zirvesi: Limon ve Portakalın Sağlık Sırları</h2>
                    <p>Soğuk algınlığının en büyük düşmanı olan limon ve portakalın, bağışıklık sistemini güçlendirme dışında ne gibi faydaları olduğunu biliyor muydunuz?</p>
                    <a href="#" class="read-more">Devamını Oku</a>
                </div>
            </article>

        </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 Meyve Haberleri. Tüm Hakları Saklıdır.</p>
        </div>
    </footer>

</body>
</html>