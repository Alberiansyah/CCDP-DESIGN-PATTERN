<?php

class User_model implements Prototype
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

    // Implementasi metode clone dari Prototype
    public function clone()
    {
        return clone $this;
    }
}
