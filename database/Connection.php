<?php 

class Connection {
    public static function make() {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=school', 'root','purpleFluke1!@');
        } catch(PDOException $ex) {
            die($ex->getMessage());
        }
    }
}