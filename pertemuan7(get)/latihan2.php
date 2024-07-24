<?php
// cek apakah tidak ada data dalam __GET
// jika dalam get-nama belom dibuat
if(!isset($_GET["nama"]) || !isset($_GET["nrp"]) || !isset($_GET["jurusan"]) || !isset($_GET["email"]) || !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    // di akhiri dengan exit agar code bawahnya tidak di eksekusi
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiwa</title>
</head>
<body>
    
<ul>
    <li>
        <img src="img/<?php echo $_GET["gambar"] ?>" width="200" height="200"  ?>

    </li>
    <li>Nama :<?php echo $_GET["nama"] ?></li>
    <li>NRP :<?php echo $_GET["nrp"] ?></li>
        <li>Jurusan :<?php echo $_GET["jurusan"] ?></li>
        <li>Email : <?php echo $_GET["email"] ?></li>
    <a href="latihan1.php">Back </a>

</ul>
</body>
</html>