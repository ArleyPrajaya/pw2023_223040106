<?php 
 $list = ['Mother Board','Processor','Hard Disk','PC Coller', 'VGA Card','SSD'];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ul>
        <?php for($i = 0;$i < count($list); $i++){ ?>
        <li><?= $list[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>Macam-macam perangkat keras komputer</h2>
        <?php 
        array_push($list,'Card Reader','Modem');    
        ?>
    <ul>
        <?php for($i = 0;$i < count($list); $i++){ sort($list); ?>
        <li><?= $list[$i]; ?></li>
        <?php } ?>
    </ul>
 </body>
 </html>
