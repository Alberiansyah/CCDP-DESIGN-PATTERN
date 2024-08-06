<?php

class User_model
{
    private $nama = 'Doddy Ferdiansyah';

    public function getUser()
    {
        return $this->nama;
    }

    // Accept method to accept the visitor
    public function accept(Visitor $visitor)
    {
        $visitor->visit($this);
    }
}
