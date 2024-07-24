<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: salmon;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(380deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    $numbers = [[1,2,3],[4,5,6],[7,8,9]] ;
//   <!-- array multidimensi -->  
    // echo $numbers[2][1];
    ?>
    <?php foreach ($numbers as $number) : ?>
        <!-- foreach ke-2 untuk element -->
        <?php foreach ($number as $num) : ?>
            <div class="kotak"><?= $num ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>


</body>
</html>