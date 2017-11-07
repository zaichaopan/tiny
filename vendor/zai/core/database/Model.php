<?php

namespace Zai\Database;

use PDO;
use Zai\App;

class Model
{
    public static function all()
    {
        $tableName = (new static)->getTableName();
        $statement = app('connection')->prepare("select * from {$tableName}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, static::class);
    }

    protected function getTableName()
    {
        $className =  (new \ReflectionClass(get_called_class()))->getShortName();
        return strtolower($className). 's';
    }
}
