<?php

include "Mahasiswa.php";

// 1
$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData("A11.2000.00001", "Fulan", "Teknik Informatika");

// 2
$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData("A11.2000.00002", "Budi", "Sistem Informasi");

// 3
$mahasiswaDKV = new Mahasiswa();
$mahasiswaDKV->setData("A11.2000.00003", "Siti", "Desain Komunikasi Visual");

// tampilkan Data dengan getData
print_r($mahasiswaTI->getData());
echo "<br><br>";
print_r($mahasiswaSI->getData());
echo "<br><br>";
print_r($mahasiswaDKV->getData());

echo "<hr>";

// tampilkan Data dengan method tampilkanData
$mahasiswaTI->tampilkanData();
$mahasiswaSI->tampilkanData();
$mahasiswaDKV->tampilkanData();

?>