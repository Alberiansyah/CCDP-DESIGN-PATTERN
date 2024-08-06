<?php

require_once '../app/models/AbstractUser.php';
require_once '../app/models/User_model.php';
require_once '../app/models/CustomUser_model.php';

// Menggunakan User_model
$user1 = new User_model();
echo $user1->getUserData();  // Output: DODDY FERDIANSYAH

// Menggunakan CustomUser_model
$user2 = new CustomUser_model();
echo $user2->getUserData();  // Output: jane doe
