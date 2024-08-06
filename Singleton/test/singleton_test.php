<?php

require_once '../app/models/User_model.php';

// Mendapatkan instance tunggal User_model
$user1 = User_model::getInstance('Alice');
$user2 = User_model::getInstance('Bob');

// Menampilkan hasil
echo "User 1: " . $user1->getUser() . "<br>"; // Output: Alice
echo "User 2: " . $user2->getUser() . "<br>"; // Output: Alice

// Mengubah nama
$user2->setUser('Charlie');

echo "User 1: " . $user1->getUser() . "<br>"; // Output: Charlie
echo "User 2: " . $user2->getUser() . "<br>"; // Output: Charlie
