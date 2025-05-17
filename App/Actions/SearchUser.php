<?php
require_once '../Core/Autoload.php';
use App\Models\User;

$searchId = $_POST['searchInput'];

$user = new User();
$users = $user->findById($searchId);
$users = [
    (array) $users
];

require __DIR__ . './../Views/IndexView.php';
