<?php
require_once('classes/database.php');
require_once('classes/User.php');

$user = new user();
$data = $user->getUserById(63);
echo '<pre>';print_r($data);
?>