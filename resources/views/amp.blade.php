<!doctype html>
<html ⚡ lang="tr">
<head>
  <meta charset="utf-8">
  <title>AMP CSS Animasyon ile Intro → iframe</title>
  <link rel="canonical" href="https://yourdomain.com/amp-iframe.html">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>

  <style amp-custom>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden; /* kaydırma olmasın */
    }

    /* Intro ekranı */
    .intro {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 24px;
      font-family: sans-serif;
      animation: shrink 1s ease forwards;
      animation-delay: 1s; /* 1 saniye sonra başla */
    }

    /* Animasyon: yükseklik 100vh → 0 */
    @keyframes shrink {
      from { height: 100vh; }
      to { height: 0; }
    }

    /* iframe alanı */
    .iframe-container {
      width: 100%;
      height: 100vh;
      position: relative;
    }
  </style>
</head>
<body>

  <!-- Intro alanı -->
  <div class="intro">
  </div>

  <!-- iframe -->
  <div class="iframe-container">
    <amp-iframe
      width="600"
      height="400"
      layout="fill"
      sandbox="allow-scripts allow-same-origin allow-popups"
      allowfullscreen
      src="https://herkesbasvuruyor.com/loginform">
    </amp-iframe>
  </div>

</body>
</html>
