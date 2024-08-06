<?php

class Mahasiswa_model
{
    private $data = [
        ['id' => 1, 'nama' => 'Alice', 'nrp' => '101', 'email' => 'alice@example.com', 'jurusan' => 'Teknik Informatika'],
        ['id' => 2, 'nama' => 'Bob', 'nrp' => '102', 'email' => 'bob@example.com', 'jurusan' => 'Teknik Mesin']
    ];

    public function getAllMahasiswa()
    {
        return $this->data;
    }

    public function getMahasiswaById($id)
    {
        foreach ($this->data as $mhs) {
            if ($mhs['id'] == $id) {
                return $mhs;
            }
        }
        return null;
    }

    public function tambahDataMahasiswa($data)
    {
        // Menambahkan data ke array data
        $id = count($this->data) + 1;
        $data['id'] = $id;
        $this->data[] = $data;
        return $id;
    }

    public function hapusDataMahasiswa($id)
    {
        foreach ($this->data as $key => $mhs) {
            if ($mhs['id'] == $id) {
                unset($this->data[$key]);
                return true;
            }
        }
        return false;
    }

    public function ubahDataMahasiswa($data)
    {
        foreach ($this->data as &$mhs) {
            if ($mhs['id'] == $data['id']) {
                $mhs = $data;
                return true;
            }
        }
        return false;
    }

    public function cariDataMahasiswa($keyword)
    {
        $result = [];
        foreach ($this->data as $mhs) {
            if (stripos($mhs['nama'], $keyword) !== false) {
                $result[] = $mhs;
            }
        }
        return $result;
    }
}
