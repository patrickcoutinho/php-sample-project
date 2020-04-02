<?php

class Connection 
{
    public static function make()
    {
        try {
            return  new PDO('mysql:host=127.0.0.1;dbname=php-practitioner', 'root', 'pass1234');
        } catch (PDOException $error) {
            die('Error em conectar');
        }
    }    
}