<?php 
// pertemuan 2, syntax
// 1. standart output
// echo, print
//  print_r (mencetak array, dan debugging)
// var_dump (melihat isi dari variable, dan debugging)
// echo "Firos Malik";
// print_r ("firos ganteng");
// var_dump ("firos ganteng") // output var_dump : string(13) "firos ganteng"

// echo true // output boolean true: 1 false : 
// 1. penulisan syntax
// -PHP didalam HTML
// -HTML didalam PHP (tidak disarankan)

// 2. variable dan typedata
// variable - tidak boleh diawali angka tapi boleh mengandung angka
$nama = "Firos Malik";

// 3. operator
// - aritmatika
// +-*/%
//  ex 
// $x = 8;
// $y = 9;
// echo $x + $y

// penggabung string/ concatenation / concat
// .
// ex 
// $nama_depan = "Firos";
// $nama_belakan = "malik";
//  echo $nama_depan ." ". $nama_belakan 

// -Assignment
//  =,+=, -=, *=, %=, /=
// $x = 1;
// $x += 5 //output 6
// $nama2 = "firos";
// $nama2 .= " ";
// $nama2 .= "malik"

// -perbandingan
// <,>,<=,>=,==,!= //tidak mengechek type data
// var_dump(1 == "1")

// -identitas (mengecheck typedata)
//  ===, !==
// var_dump(1 === "1")

// -logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0)


// 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- <h>Halo selamat datang <?php echo " Firos malik" ?></h>
    <p><?php echo " ini adalaha paragaraf" ?></p> -->
    <!-- pemakaian variable -->
    <!-- <?php echo $nama ?> -->
    <!-- <?php echo $nama2 ?> -->
</body>
</html>
