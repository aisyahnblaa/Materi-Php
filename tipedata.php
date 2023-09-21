<?php

// string
// var_dump -> dia ngasih tau tipe datanya dan jumlahnya

// $dataString = "sate";
// echo "makanan kesukaan saya adalah $dataString";
// echo "<br>";
// print $dataString;
// echo "<br>";
// var_dump($dataString);
// echo "<br>";
// print_r($dataString);

// number
// float buat desimal
// $dataNumber = 200.456;
// echo "nomonya $dataNumber";
// echo "<br>";
// print $dataNumber;
// echo "<br>";
// var_dump($dataNumber);
// echo "<br>";
// print_r($dataNumber);

// boolean
// kalau manggil pake variabel maka
// 1 = true, kosong = false
// $dataBoolean = true;

// if($dataBoolean){
//     echo "hasilnya true";
// }else{
//     echo "hasilnya false";
// }

// Null
// $dataNull = null;
// $dataNull2 = 60;

// print "ini datanya $dataNull2";

// // pengecekan data null
// $cekNull = is_null($dataNull2);
// // echo $cekNull;  klo pake var dump dikasih tau tipe data nya apaS
// var_dump($cekNull);

// Array
// $bias = array("do", "jk", "kiming", "pcy");
// print "bias saya $bias[1]";
// echo "<br>";
// echo $bias[0];
// echo "<br>";
// // array(berapa data {[index] tipedata (jumlahnya) isi datanya}), bisa nampilin semua datanya
// var_dump($bias);

// operasi array

// mengubah data -> rumusnya $variabel[index] = "value"
// $bias[1] = "jaehyuk";
// echo $bias[1];
// echo "<br>";
// echo "bias diurutannya adalah" . $bias[2] = "jihoon";

// // menambahkan data di paling belakang, rumusnya -> $variabel = "value"
// echo $bias[] = "guanlin";
// var_dump($bias);


// hapus data pada array rumusnya -> unset($variabel[indexnya])
// unset($bias[2]);
// var_dump($bias);

// // Menghitung data di array, rumusnya -> count($variabel)
// echo count($bias);

// Mapping Array "depan" = key, "aisyah" = values
// $nama = array (
//     "depan" => "aisyah",
//     "tengah" => "nabila",
//     "terakhir" => "khansa"
// );

// cara aksesnya, panggil bungkus paling luar atau variabel baru ["key"]
// echo $nama["depan"];

// mapping array dalam array
$nama = array (
        "depan" => "aisyah",
        "tengah" => "nabila",
        "terakhir" => "khansa",
        "alamat" => array(
            "kota" => "bogor",
            "negara" => "indonesia"
        )
);

// spasi  pada javascript tambah,klo php titik
// echo $nama["alamat"]["kota"]
echo $nama["depan"] . " " . $nama["alamat"]["kota"];
?>