<?php

require 'form.html';
require 'user.php';
require 'function.php';

$pdo=connectToDb();

$users=insert($pdo, "users", $_POST['name'], $_POST['mail'], $_POST['gender'], $_POST['city']);

$users=selectAll($pdo,'user','user');

// exit();
require 'index.view.php'
?>
