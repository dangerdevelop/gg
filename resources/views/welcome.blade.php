<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minik Dostlar Petshop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 1em 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 2em 0;
        }
        .section {
            background-color: white;
            padding: 2em;
            margin-bottom: 2em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .products {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .product-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1em;
            margin: 1em;
            width: 300px;
            text-align: center;
            box-shadow: 0 0 5px rgba(0,0,0,0.05);
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-card h3 {
            margin: 0.5em 0;
            color: #4CAF50;
        }
        .product-card p {
            font-size: 1.2em;
            color: #666;
        }
        .contact-form {
            display: flex;
            flex-direction: column;
            max-width: 500px;
            margin: auto;
        }
        .contact-form input, .contact-form textarea {
            padding: 0.8em;
            margin-bottom: 1em;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .contact-form button {
            background-color: #4CAF50;
            color: white;
            padding: 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.1em;
        }
        .contact-form button:hover {
            background-color: #45a049;
        }
        .footer {
            text-align: center;
            padding: 1em 0;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>

    <header class="header">
        <h1>Minik Dostlar Petshop</h1>
        <p>En sevdiğiniz dostlarınız için en iyi ürünler!</p>
    </header>

    <div class="container">
        <section id="about" class="section">
            <h2>Hakkımızda</h2>
            <p><strong>Minik Dostlar Petshop</strong> olarak, evcil hayvanlarınızın sağlıklı ve mutlu bir yaşam sürmesi için en kaliteli ürünleri sunuyoruz. Mama, oyuncak, aksesuar ve daha fazlasıyla sizlerin ve dostlarınızın yanındayız.</p>
            <img src="https://placehold.co/800x400/FF5733/FFFFFF?text=Dostunuzu+Bekliyoruz" alt="Hakkımızda görseli" style="width:100%; height:auto; border-radius: 8px;">
        </section>

        <section id="products" class="section">
            <h2>Ürünlerimiz</h2>
            <div class="products">
                <div class="product-card">
                    <img src="https://placehold.co/300x200/4CAF50/FFFFFF?text=Kedi+Maması" alt="Kedi Maması">
                    <h3>Kedi Maması</h3>
                    <p>Özel formüllü, yüksek proteinli kedi maması. Tüm ırklar için uygundur.</p>
                </div>
                <div class="product-card">
                    <img src="https://placehold.co/300x200/2196F3/FFFFFF?text=Köpek+Oyuncakları" alt="Köpek Oyuncakları">
                    <h3>Köpek Oyuncakları</h3>
                    <p>Dayanıklı ve eğlenceli köpek oyuncakları ile dostunuzun neşesini artırın.</p>
                </div>
                <div class="product-card">
                    <img src="https://placehold.co/300x200/9C27B0/FFFFFF?text=Aksesuar" alt="Evcil Hayvan Aksesuarları">
                    <h3>Evcil Hayvan Aksesuarları</h3>
                    <p>Tasma, kıyafet, yatak ve daha birçok aksesuar seçeneği.</p>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <h2>İletişim</h2>
            <p>Sorularınız veya siparişleriniz için bize ulaşın.</p>
            <form class="contact-form">
                <input type="text" placeholder="Adınız Soyadınız" required>
                <input type="email" placeholder="E-posta Adresiniz" required>
                <textarea rows="5" placeholder="Mesajınız..." required></textarea>
                <button type="submit">Gönder</button>
            </form>
        </section>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Minik Dostlar Petshop. Tüm Hakları Saklıdır.</p>
    </footer>

</body>
</html>