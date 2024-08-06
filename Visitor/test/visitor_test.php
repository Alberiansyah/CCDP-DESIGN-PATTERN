<?php

require_once '../app/models/Visitor.php';
require_once '../app/models/User_model.php';
require_once '../app/models/ConcreteVisitor.php';

// Membuat objek User_model
$user = new User_model();

// Membuat visitor
$visitor = new ConcreteVisitor();

// Mengunjungi user_model dengan visitor
$user->accept($visitor);
