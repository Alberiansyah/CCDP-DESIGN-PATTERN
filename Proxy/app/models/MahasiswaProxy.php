<?php

class MahasiswaModelProxy
{
    private $realModel;

    public function __construct()
    {
        $this->realModel = new Mahasiswa_model();
    }

    public function getAllMahasiswa()
    {
        // Menambahkan logging atau cache sebelum mengakses data
        echo "Mengakses data mahasiswa...\n";
        return $this->realModel->getAllMahasiswa();
    }

    public function getMahasiswaById($id)
    {
        // Menambahkan logging atau cache sebelum mengakses data
        echo "Mengakses detail mahasiswa dengan ID: $id\n";
        return $this->realModel->getMahasiswaById($id);
    }

    public function tambahDataMahasiswa($data)
    {
        // Menambahkan logging atau cache sebelum mengakses data
        echo "Menambahkan data mahasiswa...\n";
        return $this->realModel->tambahDataMahasiswa($data);
    }

    public function hapusDataMahasiswa($id)
    {
        // Menambahkan logging atau cache sebelum mengakses data
        echo "Menghapus data mahasiswa dengan ID: $id\n";
        return $this->realModel->hapusDataMahasiswa($id);
    }

    public function ubahDataMahasiswa($data)
    {
        // Menambahkan logging atau cache sebelum mengakses data
        echo "Mengubah data mahasiswa...\n";
        return $this->realModel->ubahDataMahasiswa($data);
    }

    public function cariDataMahasiswa($keyword)
    {
        // Menambahkan logging atau cache sebelum mengakses data
        echo "Mencari data mahasiswa...\n";
        return $this->realModel->cariDataMahasiswa($keyword);
    }
}
