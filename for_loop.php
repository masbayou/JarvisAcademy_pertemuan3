<?php

for($i= 1; $i <=10; $i++){
    echo '<br> Angka ' . $i;
}

$mood = ['setress', 'mulai malas', 'sedikit semangat', 'mulai semangat', 'full berkah', 'full rebahan', 'biasa aja'];

for ($i=0; $i < 7; $i++) { 
    echo "<br>hari ini saya " . $mood[$i];
}