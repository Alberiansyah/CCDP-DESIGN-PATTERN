<?php

require_once '../app/models/User_model.php';
require_once '../app/models/UserDecorator.php';
require_once '../app/models/FormattedUserDecorator.php';

// Membuat instance User_model
$userModel = new User_model();

// Membungkus User_model dengan FormattedUserDecorator
$decoratedUser = new FormattedUserDecorator($userModel);

// Mendapatkan nama pengguna dengan format tambahan
echo $decoratedUser->getUser();  // Output: DODDY FERDIANSYAH