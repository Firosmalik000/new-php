<?php
// $mahasiswa = [["firos malik", "05165456", "teknik informatika", "firosmalik@gmail.com"], ["dodi malik", "05165456", "teknik informatika", "dodimalik@gmail.com"],["05165456", "danials", "teknik informatika", "danials@gmail.com"]]

//  array assosiative
// definisi sama seperti array numerik kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "firos malik", "nrp" => "05165456","jurusan" =>  "teknik informatika", "email" => "firosmalik@gmail.com",
        "gambar" => "firos.jpg"
],
      [
        "nama" =>"dodi malik","nrp" => "05165456","jurusan" => "teknik informatika", "email" =>"dodimalik@gmail.com",
        "gambar" => "firos2.jpg"
    ],
    [
            "nrp" =>"05165456","nama" => "danials", "jurusan" =>"teknik informatika", "email" =>"danials@gmail.com",
            "gambar" => "gracia.jpg"
            // "tugas" => [80, 90, 85]
        ],
];
// echo $mahasiswa[2]["tugas"][1]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
 <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>  
        <li><img src="img/<?= $mhs["gambar"] ?>" width="200" height="200" src="<?= $mhs["gambar"] ?>" alt=""></li>
            <li>Nama :<?php echo $mhs["nama"] ?></li>
        <li>NRP :<?php echo $mhs["nrp"] ?></li>
        <li>Jurusan :<?php echo $mhs["jurusan"] ?></li>
        <li>Email : <?php echo $mhs["email"] ?></li>
    </ul>
<?php endforeach; ?>

    
</body>
</html>



