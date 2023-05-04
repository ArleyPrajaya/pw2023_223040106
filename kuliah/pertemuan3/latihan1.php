<?php 
$nilai_awal = 10;
echo "mulai <br>";
while($nilai_awal >=1){
    echo "hello world $nilai_awal <br>";
    $nilai_awal -= 1 ;
    // bisa juga dipakai '$nilai_awal ++' atau '$nilai_awal --'
}

echo "<hr> <br> <br>";

echo "mulai <br>";

for ($nilai_akhir=1; $nilai_akhir<=20; $nilai_akhir++){
    echo "hello world $nilai_akhir kali. <br>";

}

echo"selesai";
?>