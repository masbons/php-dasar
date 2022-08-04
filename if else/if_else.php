<?php 
// kondisi if else diperlukan untuk memeriksa suatu nilai untuk melakukan aksi
$teman = "andi";
if($teman == "andi"){
    echo "dia adalah teman saya";
}else{
    echo "dia bukan teman saya";
}

echo "</br>";

//jadi jika variable teman sama budi maka dia adalah teman saya 
$teman = "andi";
if($teman == "Budi"){
    echo "dia adalah teman saya";
}else{
    echo "dia bukan teman saya";
}

echo "</br>";

//ElseIf digunakan untuk memeriksa kondisi jika pertama (if) tidak terpenuhi
$teman = "andi";
if($teman == "Budi"){
    echo "Budi adalah teman saya";
}elseif($teman == "andi"){
    echo "Andi adalah teman saya";
}else{
    echo "Saya tidak punya teman";
}



?>