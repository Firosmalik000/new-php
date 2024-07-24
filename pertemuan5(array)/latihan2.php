<?php
// melakukan pengulangan pada array 
// for/ foreach

$numbers = [3,2,15,20,11,77,89, 8];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array</title>
    <style>
        .divdiv {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <!-- count adalah menghitung jumlah element pada array -->
    <?php for ($i = 0; $i < count($numbers); $i++) : ?>
    <div class="divdiv"><?php echo $numbers[$i] ?></div>
    <?php endfor ?>

  <br>

    <!-- pakai foreach -->
    <?php foreach( $numbers as $number) : ?>
    <div class="divdiv"><?php echo $number ?></div>
    <?php endforeach ?>
</body>
</html>