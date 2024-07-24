<?php 
// pengulangan\
// 1. for
// for( $i = 0; $i < 5; $i++){
//     echo "hello world <br />";
// }

// 2. while => sama sekali tidak dijalankan ketika false
// $i = 0;
// while($i < 10) {
// echo "hello world <br />";
// $i ++;
// }

// 3. do.. while => lakukan ini selama bersifat true, minimal dikerjakan sekali walaupun false
$i = 0;
do {
echo "hello world <br />";
$i++;
} while( $i < 20)
// 4. foreach : pengulangan khusus array
?>