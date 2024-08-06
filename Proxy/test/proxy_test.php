<?php

require_once '../app/models/Mahasiswa_model.php';
require_once '../app/models/MahasiswaProxy.php';

// Menggunakan Proxy untuk mengakses data mahasiswa
$modelProxy = new MahasiswaModelProxy();

// Menambahkan mahasiswa
$newId = $modelProxy->tambahDataMahasiswa([
    'nama' => 'Charlie',
    'nrp' => '103',
    'email' => 'charlie@example.com',
    'jurusan' => 'Teknik Lingkungan'
]);

echo "ID mahasiswa baru: $newId\n";

// Mengambil semua mahasiswa
$mahasiswa = $modelProxy->getAllMahasiswa();
print_r($mahasiswa);

// Mengambil detail mahasiswa
$detail = $modelProxy->getMahasiswaById($newId);
print_r($detail);

// Mencari mahasiswa
$cari = $modelProxy->cariDataMahasiswa('Charlie');
print_r($cari);

// Menghapus mahasiswa
$hapus = $modelProxy->hapusDataMahasiswa($newId);
echo "Mahasiswa dihapus: " . ($hapus ? "Ya" : "Tidak") . "\n";
