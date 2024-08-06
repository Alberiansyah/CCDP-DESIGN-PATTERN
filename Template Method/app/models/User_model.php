<?php

class User_model extends AbstractUser
{
    private $nama = 'Doddy Ferdiansyah';

    protected function getUserName()
    {
        return $this->nama;
    }
}
