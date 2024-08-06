<?php

class AdminUserFactory implements UserFactory
{
    public function createUser(): User_model
    {
        return new User_model('Admin User');
    }
}
