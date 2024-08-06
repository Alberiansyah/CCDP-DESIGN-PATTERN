<?php

abstract class AbstractUser
{
    // Template Method
    public function getUserData()
    {
        return $this->formatUserData($this->getUserName());
    }

    // Langkah-langkah konkret yang dapat diubah
    abstract protected function getUserName();

    // Langkah yang dapat diubah oleh subclass
    protected function formatUserData($data)
    {
        return strtoupper($data); // Format default
    }
}
