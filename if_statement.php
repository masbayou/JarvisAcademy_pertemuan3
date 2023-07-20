<?php 
$nilai = 80;

if($nilai >= 90 && $nilai <= 100) {
    echo "Selamat kamu lulus dengan nilai grade A";
}
elseif ($nilai >= 60) {
    echo "Selamat kamu lulus dengan nilai grade B";
}
else {
    echo "Mohon maaf anda tidak lulus";
}
?>