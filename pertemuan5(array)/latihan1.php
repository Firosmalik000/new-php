<?php 
// array
// variable yang dapat memiliki banyak nilai
// element pada array boleh memiliki typedata yang berbeda
// pasangan antara key dengan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");

// cara baru
$bulan = ["januari", "februari", "maret"];

// berbeda typedata
$arr1 = [123, "february", false];


// menampilkan array kelayar
// var_dump() / print_r()
// var_dump($hari) ;
echo "<br>";

// print_r tanpa menampilkan tanpa typedata
print_r($bulan);
echo "<br>";

// menampilkan 1 element dari array
// echo $hari[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan element baru pada array
var_dump($hari) ;
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari) ;
?>