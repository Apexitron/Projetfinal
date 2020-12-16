<?php

class Pdo_connexion{
    public $CNX=null;

    public function __construct(){
        $this->CNX = $this->LoadPdo();
    }

    public function LoadPdo(){
        try{
            $dbh=new PDO("mysql:host=localhost;dbname=website;charset=utf8mb4", "root", "root");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            // echo "<div'>ça marche</div>";
            return $dbh;
        }

        catch(PDOException $e)
        {
            echo utf8_encode($e->getMessage());
            die();
        }

    }
    
}



?>