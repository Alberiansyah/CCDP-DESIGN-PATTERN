<?php

class ConcreteUser implements User
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
}
