<?php

abstract class Model
{
    private static $pdo;

    protected static function getBdd()
    {
        if (isset(self::$pdo)) {
            self::$pdo = new PDO("mysql:host=localhost;dbname=MPC_secure;charset=utf8", "root", "");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        return self::$pdo;
    }
}
