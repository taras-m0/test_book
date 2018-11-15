<?php

include_once __DIR__ . '/lib/mysql.class.php';
/**
 * For ldgen.
 * User: ttt
 * Date: 15.11.2018
 * Time: 16:26
 */
abstract class model extends PDO {
    protected $table;

    static $instance = array();

    public static function getInstance($name){
        if(!array_key_exists($name, self::$instance)){
            require_once __DIR__  . '/model/' . $name . '.php';
            $class = "model_{$name}";
            self::$instance[$name] = new $class(
                'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DATABASE, MYSQL_USER, MYSQL_PASS, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
        }

        return self::$instance[$name];
    }


    public function getEntities(){
        return $this->query('SELECT * FROM ' . $this->table)->fetchAll();
    }

    public function getEntity($id){
        return $this->query('SELECT * FROM ' . $this->table . ' WHERE id=' . $id)->fetchAll();
    }
}