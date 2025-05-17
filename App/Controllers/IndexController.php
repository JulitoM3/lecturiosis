<?php
namespace App\Controllers;
use App\Models\User;
class IndexController
{

    public function __construct()
    {
        //OPERACIONES
        // $users = (new User())->getAll();

        $users = User::get();

        //LLAMADA A UNA VISTA
        require('./App/Views/IndexView.php');
    }
}