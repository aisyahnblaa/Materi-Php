<?php

// perulangan for
$angka = 1;
$angkaMaks = 30;

for($angka; $angka <=$angkaMaks; $angka++){
    echo "perulangan for ke - " . $angka;
    echo "<br>";
}

// perulangan while
// meriksa dlu baru melakukan perulangan
// $angka = 1;

// while ($angka <= 40){
//     $angka = $angka + 1;
//     echo "perulangan while ke - " . $angka;
//     echo "<br>";
// }

// while($angka<= 20){
//     echo "while ke - $angka";
//     $angka++;
//     echo "<br>";
// }
// // klo g pk kurung kurawal
// while($angka<= 20):
//     echo "while ke - $angka";
//     $angka++;
//     echo "<br>";
// endwhile;

// do while
// proses dlu baru ngecek
// $angka = 1;
// do {,
//     echo "DO while ke - " . $angka;
//     echo "<br>";
//     $angka++;
// }while($angka <= 40);

// foreach loop -> array
// $makanan = array("sate", "pempeq", "seblaq", "ceker");
// $a =2;

// foreach($makanan as $food){
//     echo $a + 1 . " . " . $makanan[$a];
//     echo "<br>";
// }

// foreach ($makanan as $food){
//     echo $a++ . " iy " . $food;
//     echo "<br>";
// }

// break/continue
$a = 0;

for($a; $a<=30; $a++){
    if($a == 10){
        break;
    }

    echo "loop break ke - " . $a;
    echo "<br>";
}
?>