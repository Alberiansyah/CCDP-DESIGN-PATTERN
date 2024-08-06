<?php
class Kelas extends Component
{
    private $kelasNama;
    private $mahasiswa = [];

    public function __construct($kelasNama)
    {
        $this->kelasNama = $kelasNama;
    }

    public function addMahasiswa(Mahasiswa $mhs)
    {
        $this->mahasiswa[] = $mhs;
    }

    public function getDetails()
    {
        $details = ['kelas' => $this->kelasNama, 'mahasiswa' => []];
        foreach ($this->mahasiswa as $mhs) {
            $details['mahasiswa'][] = $mhs->getDetails();
        }
        return $details;
    }
}
