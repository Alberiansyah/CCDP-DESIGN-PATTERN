<?php

class UserBuilder
{
    private $nama;

    public function setNama($nama)
    {
        $this->nama = $nama;
        return $this;
    }

    public function build()
    {
        return new User_model($this->nama);
    }
}
