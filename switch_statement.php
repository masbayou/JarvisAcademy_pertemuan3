<?php
$hari = "sabtu";
$mood;

switch($hari) {
    case 'senin';
    $mood = 'setress';
    break;
    case 'selasa';
    $mood = 'mulai malas';
    break;
    case 'rabu';
    $mood = 'sedikit semangat';
    break;
    case 'kamis';
    $mood = 'mulai semangat';
    break;
    case 'jumat';
    $mood = 'full berkah';
    break;
    case 'sabtu';
    case 'minggu';
    $mood = 'full rebahan';
    break;
    default;
    $mood = 'mood biasa aja';
    break;
}
echo "hari ini mood saya adalah " . $mood;
?>
