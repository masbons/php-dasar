<?php
//menghitung jumlah karakter 
$kalimat = "Belajar pemrograman di malasngoding.com";
echo strlen($kalimat);

echo "</br>";

//menghitung jumlah karakter 
$kalimat = "Belajar pemrograman di malasngoding";
echo str_word_count($kalimat);

echo"</br>";

//membalikan kalimat
$kalimat = "Belajar pemrograman di malasngoding";
echo strrev($kalimat);


echo "</br>";

//pengganti isi string 
$kalimat = "Belajar pemrograman di malasngoding";
echo str_replace("Belajar","Tutorial",$kalimat);
?>