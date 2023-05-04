<?php 


function menghitungluaslingkaran($r){
    echo "<h4> Menghitung Luas Lingkaran </h4>";
    $phi=3.14;

    $hasil = $phi*$r*$r;
    echo "jari jari = $r" . "</br>";
    echo "maka luas lingkaran adalah " . "$hasil " ."cm<sup>2</sup>";
    echo "<hr>";
}


function menghitungkelilinglingkaran($r){
    echo "<h4> Menghitung keliling Lingkaran </h4>";
    $phi=3.14;

    $hasil = 2*$phi*$r;
    echo "jari jari = $r" . "</br>";
    echo "maka keliling lingkaran adalah " . "$hasil " ."cm";
    echo "<hr>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h2><?= menghitungluaslingkaran(10); ?></h2>
    <h2><?= menghitungkelilinglingkaran(20); ?></h2>
</body>
</html>