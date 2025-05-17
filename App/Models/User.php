<?php

namespace App\Models;

use App\Models\Model;

class User extends Model
{

    protected static $table = 'users';

    private $id;
    private $name;
    private $email;

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }




}