<?php

require_once '../app/models/Prototype.php';
require_once '../app/models/User_model.php';

// Membuat objek User_model
$user1 = new User_model('Alice');

// Mengkloning objek User_model
$user2 = $user1->clone();
$user2->setUser('Bob');

// Menampilkan hasil
echo "User 1: " . $user1->getUser() . "<br>"; // Output: Alice
echo "User 2: " . $user2->getUser() . "<br>"; // Output: Bob
