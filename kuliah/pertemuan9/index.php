<?php 
require('functions.php');
$title = 'Home';
        $students= [
          [
            "nama" => "Arley Prajaya Gunawan",
            "npm" => "223040106",
            "email" => "arleyprajayagunawan@gmail.com",
          ],
          [
            "nama" => "Egi Bagus Hidayatuloh",
            "npm" => "223040106",
            "email" => "arleyprajayagunawan@gmail.com" 
          ],
          ];

        //   echo $_SERVER["REQUEST_URI"];
        //   /pw2023_223040106/kuliah/pertemuan8/index.php/
      
require('views/index.view.php');