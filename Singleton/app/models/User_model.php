<?php

class User_model
{
    private static $instance = null;
    private $nama;

    // Konstruktor privat untuk mencegah instansiasi langsung
    private function __construct($nama)
    {
        $this->nama = $nama;
    }

    // Metode statis untuk mendapatkan instance tunggal
    public static function getInstance($nama)
    {
        if (self::$instance === null) {
            self::$instance = new self($nama);
        }
        return self::$instance;
    }

    public function getUser()
    {
        return $this->nama;
    }

    public function setUser($nama)
    {
        $this->nama = $nama;
    }

    // Mencegah cloning instance
    private function __clone()
    {
    }

    // Mencegah deserialisasi instance
    public function __wakeup()
    {
    }
}
