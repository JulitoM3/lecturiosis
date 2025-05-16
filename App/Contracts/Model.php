<?php

namespace App\Contracts;

interface Model
{

    public function save();
    public function delete();
    public function findById($id);

}