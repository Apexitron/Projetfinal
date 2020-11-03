<?php

class Pdo_connexion{
    public $CNX=null;

    public function __construct(){
        $this->CNX = $this->LoadPdo();
    }

    private function LoadPdo(){
        try{
            $dbh=new PDO("mysql:host=localhost;dbname=website;charset=utf8mb4", "root", "root");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $dbh;
            echo "<div class='col-sm-12'>ça marche</div>";
        }

        catch(PDOException $e)
        {
            echo utf8_encode($e->getMessage());
            die();
        }

    }
}
?>