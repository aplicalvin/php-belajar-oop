<?php
include 'Mahasiswa.php';
include 'MahasiswaTransfer.php';
// include 'MataKuliah.php';

$daftar_nilai = [
    "A22.123" => ['sks' => 2, 'nilai' => 'A'],
    "A22.456" => ['sks' => 3, 'nilai' => 'C'],
    "A22.789" => ['sks' => 2, 'nilai' => 'B']
];


$mahasiswa_1 = new MahasiswaTransfer($daftar_nilai);

// $mahasiswa_1 = new Mahasiswa();
// $matakuliah_1 = new Matakuliah();

$mahasiswa_1->setData("A11.2023.14880", "Calvin Samuel Simbolon", "2005-08-23");
// $matakuliah_1->setData('A11.12345', 'Pemrograman Web Lanjut');

echo '<pre>';
print_r($mahasiswa_1->getData());
echo '<pre>';




// var_dump($mahasiswa_1->getData());

// echo "Umur dihitung dengan rumus : <br />";
// var_dump($mahasiswa_1->getData()[3]);
// echo '<br />';
// echo ' <br /> Nilai umur diberi langsung : <br />';

// Kode dibawah sudah tidak bisa diakses karena "Umur" telah di setting kembali menjadi Private.
// $mahasiswa_1->umur = 100;
// var_dump($mahasiswa_1->umur)

// var_dump($mahasiswa_1->getData());
// echo '<br />';
// var_dump($matakuliah_1->getData());
// echo '<br />';
// var_dump($mahasiswa_1->nama);
// echo '<br />';
// var_dump($mahasiswa_1->nim);


?>