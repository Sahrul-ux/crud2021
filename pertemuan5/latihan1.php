<?php

// array
// variable yang memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang mulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];

// isi array boleh dengan type data berbeda string, char, bool
$arr1 = [123, "tulisan", false];

// menampilkan array
var_dump($hari);
echo "<br>";
print_r($arr1);
