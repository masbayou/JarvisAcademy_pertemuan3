<?php 
$hewan = ["kucing", "anjing", "kambing", "ayam", "kuda", "gajah", "singa", "domba"];
for ($i = 0; $i < count($hewan) ; $i++) { 
 if($hewan[$i] == "kuda"){
    echo "ketemu kuda!";
    continue;
 }   
 echo "bukan kuda<br>";
}