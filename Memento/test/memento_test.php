<?php

require_once '../app/models/User_model.php';
require_once '../app/models/UserMemento.php';
require_once '../app/models/UserOriginator.php';

// Membuat objek User_model
$user = new User_model('Doddy Ferdiansyah');

// Membuat UserOriginator untuk menyimpan dan mengembalikan status
$originator = new UserOriginator($user);

// Menyimpan status saat ini
$memento = $originator->createMemento();

// Mengubah status objek
$user->setUser('Alice');

// Mengembalikan status dari memento
$originator->restoreMemento($memento);

// Menampilkan nama pengguna
echo $user->getUser(); // Output: Doddy Ferdiansyah
