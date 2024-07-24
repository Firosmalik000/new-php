<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <!-- kalau action di kosongin maka data akan dikirim kesini sendiri sebagai default -->
<?php if(isset($_POST["submit"])) : ?>
    <h1>Halo selamat datang <?php echo $_POST["nama"]; ?></h1>
<?php endif; ?>
<form action="latihan2.php" method="post">
Masukan nama
    <input type="text" name="nama">
    <br>
    <button type="submit">Kirim</button>
</form>
</body>
</html>