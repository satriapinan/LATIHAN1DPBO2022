<?php

include "Mahasiswa.php";

// Konstruktor dengan parameter
$mahasiswa1 = new Mahasiswa("2000514", "Satria", "L", "Ilmu Komputer", 4);

// Setter
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setNIM("20489089");
$mahasiswa2->setNama("John Doe");
$mahasiswa2->setGender("L");
$mahasiswa2->setProdi("Ilmu Gaib");
$mahasiswa2->setSemester(9);

// Getter
echo "<h1> Mahasiswi 1 </h1>";
echo "NIM : ".$mahasiswa1->getNIM()."<br>";
echo "Nama : ".$mahasiswa1->getNama()."<br>";
echo "Jenis Kelamin : ".$mahasiswa1->getGender()."<br>";
echo "Program Studi : ".$mahasiswa1->getProdi()."<br>";
echo "Semester : ".$mahasiswa1->getSemester()."<br>";

echo "<h1> Mahasiswi 2 </h1>";
echo "NIM : ".$mahasiswa2->getNIM()."<br>";
echo "Nama : ".$mahasiswa2->getNama()."<br>";
echo "Jenis Kelamin : ".$mahasiswa2->getGender()."<br>";
echo "Program Studi : ".$mahasiswa2->getProdi()."<br>";
echo "Semester : ".$mahasiswa2->getSemester()."<br>";

?>