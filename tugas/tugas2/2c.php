<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan div php</title>
    <style>
    .kotak {
        width:50px;
        height:50px;
        font-size: 20px;
        font-weight: bold;
        text-align:center;
        line-height:50px;
        color: white;
        background-color: purple;
        border:1px solid black;
        display:inline-block;
    }
</style>
</head>
<body>
    <?php
$baris_kotak = 10; // jumlah baris segitiga

for ($a = $baris_kotak; $a >= 1; $a--) {
    for ($b = 1; $b <= $a; $b++) {
        echo "<div class='kotak'>" . $b . "</div>";
    }
    echo "<br>";
}
?>
</body>
</html>




<!-- note : 
*variabel $baris_kotak yang akan menentukan jumlah baris dalam segitiga yang akan dibuat
*dalam loop pertama -> (for ($a = $baris_kotak; $a >= 1; $a--)), 
dan membuat loop kedua untuk mencetak setiap angka dalam baris segitiga tersebut :
*(for ($b = 1; $b <= $a; $b++)).
Pada setiap angka, terdapat sebuah <div> dengan nama kelas .kotak dan isi angka tersebut :
*(echo "<div class='kotak'>" . $b . '</div>';). -->