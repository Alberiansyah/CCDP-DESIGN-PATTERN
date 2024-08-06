<?php

class User_model
{
    private $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getUser()
    {
        return $this->nama;
    }

    public function setUser($nama)
    {
        $this->nama = $nama;
    }
}
