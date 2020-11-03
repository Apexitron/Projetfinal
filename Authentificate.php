<?php
require "Pdo_connexion.php";
class Authentificate extends Pdo_connexion{
    public function __construct($login, $password)
    {
        //$this->login=$login;
        //$this->password=$password;
        parent::__construct();
        $this->TestUser($login, $password); 
    }

    private function TestUser($login, $password){

        $REQ="select id_user from user where pseudo_user=:login and password_user=:mdp";
        $RES= $this->CNX->prepare($REQ);
        $RES->execute(array(":login"->$login, ":mdp"->$password));
        if(!empty($RES)&&$RES->rowCount()==1){
            $id=$RES->fetch();
            $this->Identification($id["id_user"]);
        }
    }

    private function Identification($id)
    {
        $REQ="select id_user, login_user, name_user, firstname_user from user where id_user=id";
        $RES = $this->CNX->prepare($REQ);
        $RES->execute(array(":id"=>$id));
        $this->User = $RES->fetch();
        $this->setSession();
    }

    private function setSession()
    {
        $_SESSION["session"]=session_id();
        $_SESSION["id_user"]=$this->User["id_user"];
        $_SESSION["login"]=$this->User["login_user"];
        $_SESSION["name"]=$this->User["name_user"];
        $_SESSION["firstname"]=$this->User["firstname_user"];

    }
}
?>