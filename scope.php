<?php

// variabel lokal itu harus di dalam function(hanya bisa di akses di dalam kurung function)

varLokal();
function varLokal(){
    $lokal = "bisa diakses";
    print "variabel $lokal bisa di akses di dalam";
}

// print "variabel $lokal diluar";

// variabel publik
// variabel bisa diakses diluar function
varPublik();
$publik = 1000;
function varPublik(){
    // $publik = 3000;
    print "permen harganya $publik";
    echo "<br>";
}

echo "jelly harganya $publik";

varlokal();
print "variabel $lokal bisa diakses diluar"
?>