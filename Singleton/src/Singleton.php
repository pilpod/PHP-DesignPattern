<?php

namespace App;

class Singleton {

    private static ?Singleton $singleton = null;

    private function __construct()
    {
        
    }

    public static function getInstance() : Singleton
    {
        if(static::$singleton === null) {
            return new Singleton;
        }

        return static::$singleton;
    }

}