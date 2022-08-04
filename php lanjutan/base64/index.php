<?php 
 // base64_encode berguna umtuk men-encode string
$data = "Tutorial base64 di php www.malasngoding.com";
 
echo base64_encode($data);
 
 echo "</br>";
 
$data = "Tutorial base64 di php www.malasngoding.com";
 
echo base64_encode(base64_decode($data));
 
// berguna untuk mengembalikan hasil encode atau men-decode string
?>