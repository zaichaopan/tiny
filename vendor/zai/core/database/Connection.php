<?php

namespace Zai\Database;

class Connection
{
    public static function make($config)
    {
        try {
            return new \PDO(
                $config['connection'] . ';' . $config['dbname'],
                $config['username'], 
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }
}
