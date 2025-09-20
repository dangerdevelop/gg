<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short Link Generator</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        :root {
            --primary-color: #6a11cb;
            --secondary-color: #2575fc;
            --background-color: #f0f2f5;
            --card-background: #ffffff;
            --text-color: #333333;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --border-radius: 12px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: var(--text-color);
        }

        .container {
            background-color: var(--card-background);
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            text-align: center;
            width: 90%;
            max-width: 500px;
            position: relative;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -50px;
            left: -50px;
            width: 150px;
            height: 150px;
            background: rgba(106, 17, 203, 0.1);
            border-radius: 50%;
            transform: rotate(45deg);
        }

        .container::after {
            content: '';
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background: rgba(37, 117, 252, 0.1);
            border-radius: 50%;
            transform: rotate(-45deg);
        }

        h1 {
            color: var(--primary-color);
            margin-bottom: 10px;
            font-weight: 600;
        }

        p {
            color: #666;
            margin-bottom: 30px;
        }

        .input-group {
            width: 100%;
            margin-bottom: 20px;
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 15px 45px 15px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        .input-group input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .input-group .icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .custom-link-container {
            display: none;
            width: 100%;
            margin-bottom: 20px;
            transition: all 0.5s ease;
            position: relative;
        }

        .custom-link-container.active {
            display: block;
        }

        .custom-link-container .base-url {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            background: #f0f2f5;
            padding: 8px;
            border-radius: 4px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 14px;
            z-index: 1;
        }

        .custom-link-container input {
            width: 100%;
            padding: 15px 15px 15px 115px; /* Base URL genişliğine göre ayarlandı */
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }

        .custom-link-container input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            display: none; /* İlk başta gizli */
        }

        button.active {
            display: block;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        @keyframes fadeIn {
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
</head>
<body>

    <div class="container">
        <h1>Short Link Generator</h1>
        <p>Paste your long URL below to get a shorter, cleaner link.</p>

        <div class="input-group">
            <input type="text" id="longUrl" placeholder="https://example.com/very/long/url" oninput="showCustomLinkInput()">
            <span class="icon">&#128279;</span>
        </div>

        <div class="custom-link-container" id="customLinkContainer">
            <span class="base-url">short.link/</span>
            <input type="text" id="customShortUrl" placeholder="custom-link-here">
        </div>
        
        <button id="confirmButton" onclick="generateLink()">Confirm</button>
    </div>

    <script>
        function showCustomLinkInput() {
            const longUrlInput = document.getElementById('longUrl');
            const customLinkContainer = document.getElementById('customLinkContainer');
            const confirmButton = document.getElementById('confirmButton');
            
            if (longUrlInput.value.trim() !== '') {
                customLinkContainer.classList.add('active');
                confirmButton.classList.add('active');
            } else {
                customLinkContainer.classList.remove('active');
                confirmButton.classList.remove('active');
            }
        }

        function generateLink() {
            const longUrlInput = document.getElementById('longUrl');
            const customShortUrlInput = document.getElementById('customShortUrl');
            
            const longUrl = longUrlInput.value.trim();
            let customPart = customShortUrlInput.value.trim();

            if (longUrl === '') {
                alert('Please enter a URL to shorten.');
                return;
            }

            // Kullanıcı kendi kısaltmasını yazmamışsa, rastgele bir tane oluştur
            if (customPart === '') {
                customPart = Math.random().toString(36).substring(2, 8);
            }

            const finalShortUrl = `short.link/${customPart}`;

            // Gerçek bir API çağrısı yapılması gereken yer burasıdır.
            // Bu kısım bir örnekten ibarettir.
            alert(`Your shortened link is: ${finalShortUrl}`);

            // İşlem sonrası input'ları ve butonları temizle/gizle
            longUrlInput.value = '';
            customShortUrlInput.value = '';
            showCustomLinkInput(); // Bu fonksiyon, inputlar boşaltılınca elemanları gizler
        }
    </script>

</body>
</html>