<?php
function Urutanangka($baris)
{
    $urutan = 1;
    for ($i = 1; $i <= $baris; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $urutan++ . " ";
        }
        echo "<br>";
    }
}

echo Urutanangka(5);
?>