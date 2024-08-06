<?php

class FormattedUserDecorator implements UserDecorator
{
    private $userModel;

    public function __construct(User_model $userModel)
    {
        $this->userModel = $userModel;
    }

    public function getUser()
    {
        // Menambahkan format khusus pada nama pengguna
        return strtoupper($this->userModel->getUser());
    }
}
