<?php

class UserOriginator
{
    private $user;

    public function __construct(User_model $user)
    {
        $this->user = $user;
    }

    public function createMemento()
    {
        return new UserMemento($this->user->getUser());
    }

    public function restoreMemento(UserMemento $memento)
    {
        $this->user->setUser($memento->getState());
    }
}
