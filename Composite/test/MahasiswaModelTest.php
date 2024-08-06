<?php

require_once '../app/models/Component.php';
require_once '../app/models/Mahasiswa.php';
require_once '../app/models/Kelas.php';

// Membuat beberapa mahasiswa
$mhs1 = new Mahasiswa('Alice', '101', 'alice@example.com', 'Teknik Informatika');
$mhs2 = new Mahasiswa('Bob', '102', 'bob@example.com', 'Teknik Mesin');

// Membuat kelas dan menambahkan mahasiswa
$kelas = new Kelas('Kelas A');
$kelas->addMahasiswa($mhs1);
$kelas->addMahasiswa($mhs2);

// Mendapatkan detail
echo '<pre>';
print_r($kelas->getDetails());
echo '</pre>';
