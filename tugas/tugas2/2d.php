<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .padding {
            line-height: 10px !important;
        }

        .kotak {
            width: 30px;
            height: 30px;
            display: inline-block;
            border: 2px solid black;
        }

        .black {
            background-color: black;
        }

        .white {
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="padding">
<!-- php code : -->
        <?php
        for ($a = 0; $a < 5; $a++) {
            for ($b = 0; $b < 5; $b++) {
                if (($a + $b) % 2 == 0) {
                    echo "<div class='kotak black'></div>";
                } else {
                    echo "<div class='kotak white'></div>";
                }
            }
            echo "<br>";
        }
        ?>
<!-- note :
*kotak 5 baris (catur)
-->
    </div>
</body>

</html>