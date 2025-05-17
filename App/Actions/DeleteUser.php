<?php

require_once '../Core/Autoload.php';
use App\Models\User;

$userId = $_POST['id'];
$user = new User();
$result = $user->findById($userId);

echo $result->id;
echo "<br>";
echo $result->name;
echo "<br>";
echo $result->email;
echo "<br>";

$deleted = $user->delete($userId);

if ($deleted > 0) {
    echo "Usuario eliminado correctamente.";
} else {
    echo "Error al eliminar el usuario.";
    echo "<br>";
}




