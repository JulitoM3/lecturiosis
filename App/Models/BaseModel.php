<?php

use App\Contracts\Model as ModelContract;
use App\Models\Connection;

class BaseModel implements ModelContract
{

    protected $table = '';

    public function __construct(
        protected $dbInstance = Connection::getInstance()
    ) {
    }

    public function save()
    {

    }

    public function delete()
    {


    }


    public function findById($id)
    {

    }

    static function get()
    {
        $table = self::$table;

        $sql = "select * FROM $table;";
        $result = self::$dbInstance->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


}