<?php 
$mahasiswa = [
    [
        "nama" => "firos malik", "nrp" => "05165456","jurusan" =>  "teknik informatika", "email" => "firosmalik@gmail.com",
        "gambar" => "firos.jpg"
],
      [
        "nama" =>"firos malik2","nrp" => "05165456","jurusan" => "teknik informatika", "email" =>"firosmalik2@gmail.com",
        "gambar" => "firos2.jpg"
    ],
    [
            "nrp" =>"05165456","nama" => "Gracia", "jurusan" =>"teknik informatika", "email" =>"Gracia@gmail.com",
            "gambar" => "gracia.jpg"
            // "tugas" => [80, 90, 85]
        ],
];
// variable scope/ lingkup variable
//  superglobal variable global dalam php
// merupakan array assosiatif
// $_GET
// var_dump($_GET);

// $_POST
// var_dump($_POST);

// $_REQUEST

// $_SESSION

// $_COOKIE

// $_SERVER
// informasi server kita
// var_dump($_SERVER);\
// echo $_SERVER["SERVER_NAME"];

// $_ENV
// ///////////////////////////////////
// lets code
// $_GET
//  $_GET["nama"] = "firos Malik";
//  $_GET["nrp"] = "05165456";
//  var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <a href="latihan2.php?nama=<?php echo $mhs["nama"] ?>&nrp=<?php echo $mhs["nrp"] ?>&email=<?php echo $mhs["email"] ?>&jurusan=<?php echo $mhs["jurusan"] ?>&gambar=<?php echo $mhs["gambar"] ?>">
                   <li>Nama :<?php echo $mhs["nama"] ?></li>
            </a>
         
        </ul>

    <?php endforeach; ?>
</body>
</html>