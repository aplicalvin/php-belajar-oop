<?php
include 'Mahasiswa.php';
include 'MataKuliah.php';

$mahasiswa_1 = new Mahasiswa();
$matakuliah_1 = new Matakuliah();

$mahasiswa_1->setData("A11.2023.14880", "Calvin Samuel Simbolon");
$matakuliah_1->setData('A11.12345', 'Pemrograman Web Lanjut');

var_dump($mahasiswa_1->getData());
echo '<br />';
var_dump($matakuliah_1->getData());

?>