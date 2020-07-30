<?php

namespace DesignPatternImplementation\CreationalPattern\Singleton;

class DatabaseConnection {
    private static $databaseConnection;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getConnection()
    {
        if (static::$databaseConnection == null) {
            echo "new object\n"; //This Line Should Echo Only Once;
            static::$databaseConnection = new DatabaseConnection();
        }
        return static::$databaseConnection;
    }
}