<?php

class Model
{
    public static $pdo;

    public static function connection($config){
        try {
            $pdo = new PDO($config['dsn'], $cofig['user'], $config['pass']);
        }catch (PDOException $e){
            echo "Fatal error connecting: " . $e->getMessage();
        }
    }

}