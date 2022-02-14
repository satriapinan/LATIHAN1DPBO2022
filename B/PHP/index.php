<?php

include "TimSepakBola.php";

// Setter
$tim1 = new TimSepakBola();
$tim1->setNamaTim("Arsenal");
$tim1->setNegara("Inggris");
$tim1->setTahun(1886);
$tim1->setNamaPemain("Satria1");
$tim1->setNamaPemain("Satria2");
$tim1->setNamaPemain("Satria3");
$tim1->setNamaPemain("Satria4");
$tim1->setNamaPemain("Satria5");
$tim1->setNamaPemain("Satria6");
$tim1->setNamaPemain("Satria7");
$tim1->setNamaPemain("Satria8");
$tim1->setNamaPemain("Satria9");
$tim1->setNamaPemain("Satria10");
$tim1->setNamaPemain("Satria11");

// Output (getter)
echo "<h3>===== Data Tim 1 =====</h3>";
echo "<b>Nama Tim :</b><br>";
echo $tim1->getNamaTim()."<br>";

echo "<b>Asal Negara :</b><br>";
echo $tim1->getNegara()."<br>";

echo "<b>Tahun Berdiri :</b><br>";
echo $tim1->getTahun()."<br>";

echo "<b>Nama Pemain :</b><br>";
for($i = 0; $i < 11; $i++) { 
 	echo ($i + 1).". ".$tim1->getNamaPemain($i)."<br>";
}

?>