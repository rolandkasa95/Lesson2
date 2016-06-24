<?php

class Model
{
    public static $pdo;

    public static function connection($config){
        try {
            $pdo = new PDO($config['dsn'], $config['user'], $config['pass']);
        }catch (PDOException $e){
            echo "Fatal error connecting: " . $e->getMessage();
        }
    }

    public static function createTable($config){
        try{
            $sql = 'CREATE TABLE IF NOT EXISTS $config["table_name"] (';
              foreach($config['table_name'] as $key => $value){
                $sql .= $key[$value] . " , ";
              }
            $sql .= ")";
            echo $sql;
        }catch (PDOException $e){
            echo "Fatal error: " . $e->getMessage();
        }
    }

}