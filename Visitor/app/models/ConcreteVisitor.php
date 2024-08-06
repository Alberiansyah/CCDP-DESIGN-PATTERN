<?php

class ConcreteVisitor implements Visitor
{
    public function visit(User_model $user_model)
    {
        // Implement specific operation on User_model
        echo "User name is: " . $user_model->getUser();
    }
}
