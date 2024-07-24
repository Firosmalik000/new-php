<!-- fungsi date/ time = time(), date(), mktime(), strtotime() -->
 <?php
//  date utuk menampilkan tanggal format tertentu
//   echo date("l, d-M-Y");

// time
// UNIX timestamp / EPOCH time (detik yang sudah berlalu sejak 1 januari 1970)
// untuk menentukan deadline, atau batas waktu atau diskon yang berlangsung
// echo time();

// maksud +172.. adalah untuk menampilkan waktu 2 hari kedepan
// echo date("l", time()+172800)

// cara mudah untuk 100 haru kedepan
// echo date("l, d-M-Y", time()+60*60*24*100);

// mktime untuk membuat sendiri detik
// mktime(jam,menit,detik,bulan,tanggal,tahun)
// detik yang udah berlalu dari 1970 - 2000
// echo mktime(0,0,0,3,4,2000)
// untuk tau hari pada saat 4 maret 2000
// echo date("l", mktime(0,0,0,3,4,2000))

// strtotime : kebalikan mktime
// echo strtotime("4 march 2000");
echo date("l", strtotime("4 march 2000"))
 ?>