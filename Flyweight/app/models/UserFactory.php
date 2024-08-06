<?php

class UserFactory
{
    private $users = [];

    public function getUser($nama)
    {
        if (!isset($this->users[$nama])) {
            $this->users[$nama] = new ConcreteUser($nama);
        }
        return $this->users[$nama];
    }
}
