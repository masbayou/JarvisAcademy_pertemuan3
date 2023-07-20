<?php 
$hewan = ["kucing", "anjing", "kambing", "ayam", "kuda"];
for ($i = 0; $i < count($hewan) ; $i++) { 
 if($hewan[$i] == "kuda"){
    echo "ketemu kuda!";
    break;
 }   
 echo "bukan kuda<br>";
}