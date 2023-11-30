<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = $_POST["new-username"];
    $newPassword = $_POST["new-password"];

    // Yeni kullanıcı adı ve şifreyi dosyaya ekle
    $file = fopen("kullanicilar.txt", "a");
    fwrite($file, "Username: " . $newUsername . " - Password: " . $newPassword . "\n");
    fclose($file);

    echo "Kayıt işlemi başarıyla tamamlandı!";
}
?>
