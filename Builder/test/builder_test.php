<?php

require_once '../app/models/User_model.php';
require_once '../app/models/UserBuilder.php';

// Menggunakan UserBuilder untuk membuat User_model
$builder = new UserBuilder();
$user = $builder->setNama('Alice')->build();

echo "User: " . $user->getUser() . "<br>";
