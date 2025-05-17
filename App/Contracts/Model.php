<?php

namespace App\Contracts;

interface Model
{

    public function save();
    public function delete($id);
    public function findById($id);

}