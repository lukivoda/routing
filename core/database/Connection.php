<?php

class Connection {



    public static function make(){

        try {
            return  new PDO(DSN,USERNAME,PASSWORD,OPTIONS);

        }catch(PDOException $e){
            die('We are not connected '.$e->getMessage());
        }

    }
}