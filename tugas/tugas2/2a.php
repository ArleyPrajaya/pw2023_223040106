<?php 


    for($nilai_awal=1; $nilai_awal<=100; $nilai_awal++ ){
       
        if( $nilai_awal%3==0 and $nilai_awal%5==0){
            echo "Arley Prajaya <br>";
        } elseif($nilai_awal%5==0){
            echo"Prajaya <br>";
        }elseif($nilai_awal%3==0){
            echo"Arley <br>";
        }else{
            echo "$nilai_awal <br>";
        }
        
    }
?>