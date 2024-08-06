<?php

require_once '../app/models/User.php';
require_once '../app/models/ConcreteUser.php';
require_once '../app/models/UserFactory.php';

// Membuat instance UserFactory
$userFactory = new UserFactory();

// Mendapatkan atau membuat User dengan nama tertentu
$user1 = $userFactory->getUser('Doddy Ferdiansyah');
$user2 = $userFactory->getUser('Doddy Ferdiansyah');

// Menampilkan nama pengguna
echo $user1->getUser();  // Output: Doddy Ferdiansyah
echo $user2->getUser();  // Output: Doddy Ferdiansyah

// Memeriksa apakah kedua referensi adalah objek yang sama
var_dump($user1 === $user2);  // Output: bool(true)
