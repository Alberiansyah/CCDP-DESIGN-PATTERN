<?php

class Mahasiswa extends Component
{
    private $nama;
    private $nrp;
    private $email;
    private $jurusan;

    public function __construct($nama, $nrp, $email, $jurusan)
    {
        $this->nama = $nama;
        $this->nrp = $nrp;
        $this->email = $email;
        $this->jurusan = $jurusan;
    }

    public function getDetails()
    {
        return [
            'nama' => $this->nama,
            'nrp' => $this->nrp,
            'email' => $this->email,
            'jurusan' => $this->jurusan
        ];
    }
}
