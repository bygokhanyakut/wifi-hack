<?php
$dosya = "kayit.txt";

if (file_exists($dosya)) {
    $icerik = file($dosya);

    echo "<ul>";
    foreach ($icerik as $satir) {
        echo "<li>$satir</li>";
    }
    echo "</ul>";
} else {
    echo "Henüz bir metin kaydedilmemiş.";
}
?>
