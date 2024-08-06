<?php

require_once '../app/models/UserIterator.php';
require_once '../app/models/User_model.php';
require_once '../app/models/UserCollection.php';

// Membuat objek User_model
$user1 = new User_model('Alice');
$user2 = new User_model('Bob');

// Membuat koleksi pengguna
$collection = new UserCollection();
$collection->addUser($user1);
$collection->addUser($user2);

// Mengiterasi koleksi
while ($collection->hasNext()) {
    $user = $collection->next();
    echo $user->getUser() . "<br>";
}
