<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: blue;
        }
    </style>
</head>
<body>
    <!-- 3 baris, tiap baris ada colom -->
     <table border="1" cellpadding="10" >
   <!-- <?php 
   for($i = 1; $i <= 3; $i++) {
       echo "<tr>";
       for($j = 1; $j <= 5; $j++) {
           echo "<td>$i,$j</td>";
       };
       echo " </tr> ";
    //    i baris j kolom
   } ;
   ?> -->

   <!-- pendekatan templating -->
   <?php 
   for($i = 1; $i <= 5; $i++) : ?>
   <?php if($i % 2 == 1) : ?>
<tr class="warna-baris">
    <?php else : ?>
<tr >
    <?php endif; ?>
    <?php for($j = 1; $j <=5; $j++) {?>
<td><?php echo "$i,$j" ?></td>

 <?php   }
    ?>
</tr>
   <?php endfor?>
     </table>
     <br>
     <!-- pendekatan agar mudah dipahami, yang php dan html dipisahin -->
     <table border="1" cellpadding="10">
     <?php 
   for($i = 1; $i <= 5; $i++) : ?>
<tr>
    <?php 
    for($j = 1; $j <=5; $j++) :?>
    <!-- php echo di ganti = juga bisa ketika ingin menghasilkan sesuatu -->
<td><?= "$i,$j" ?></td>

 <?php   endfor;
    ?>
</tr>
   <?php endfor?>
   <!-- endfor untuk tutup kurawal dari for begitu pula if dll -->
     </table>
</body>
</html>