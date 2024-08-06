<?php

class UserCollection implements UserIterator
{
    private $users = [];
    private $current = 0;

    public function addUser(User_model $user)
    {
        $this->users[] = $user;
    }

    public function hasNext()
    {
        return isset($this->users[$this->current]);
    }

    public function next()
    {
        return $this->users[$this->current++];
    }
}
