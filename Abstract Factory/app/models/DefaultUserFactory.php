<?php

class DefaultUserFactory implements UserFactory
{
    public function createUser(): User_model
    {
        return new User_model('Default User');
    }
}
