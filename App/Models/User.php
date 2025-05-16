<?php

namespace App\Models;

use BaseModel;

class User extends BaseModel
{

    protected $table = 'users';

    private $id;
    private $name;
    private $email;



}