<?php

require_once '../app/models/User_model.php';
require_once '../app/models/UserFactory.php';
require_once '../app/models/DefaultUserFactory.php';
require_once '../app/models/AdminUserFactory.php';

// Menggunakan DefaultUserFactory
$defaultFactory = new DefaultUserFactory();
$defaultUser = $defaultFactory->createUser();
echo "Default User: " . $defaultUser->getUser() . "<br>";

// Menggunakan AdminUserFactory
$adminFactory = new AdminUserFactory();
$adminUser = $adminFactory->createUser();
echo "Admin User: " . $adminUser->getUser() . "<br>";
