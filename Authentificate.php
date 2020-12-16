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

    private function setSession()
    {
        $_SESSION["session"]=session_id();
        $_SESSION["id_user"]=$this->User["id_user"];
        $_SESSION["login"]=$this->User["pseudo_user"];
        $_SESSION["name"]=$this->User["name_user"];
        $_SESSION["firstname"]=$this->User["first_name_user"];

    }

    private function TestUser($login, $password){

        $REQ="select id_user from user where pseudo_user=:login and password_user=:mdp";
        $RES= $this->CNX->prepare($REQ);
        $RES->execute(array(":login"=>$login, ":mdp"=>$password));
        if(!empty($RES)&&$RES->rowCount()==1){
            $id=$RES->fetch();
            $this->Identification($id["id_user"]/* , $id[""] */);
        }
        else{
            echo "<div class='col-7 mx-auto text-center font-weight-bold mt-1 wrong'>Nom d'utilisateur ou mot de passe incorrect</div>";
        }
    }

    private function Identification($id)
    {
        $REQ="select id_user, pseudo_user, name_user, first_name_user from user where id_user=:id";
        $RES = $this->CNX->prepare($REQ);
        $RES->execute(array(":id"=>$id));
        $this->User = $RES->fetch();
        $this->setSession();
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
        header('Location: profile.php');
    }

    

    private function Deconnexion()
	{
	$_SESSION = array();

	// Si vous voulez détruire complètement la session, effacez également le cookie de session.
	// Note : cela détruira la session et pas seulement les données de session !
	if (ini_get("session.use_cookies")):
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
	endif;
	session_destroy();
	header('refresh:0.5;url=index.php');
	}

   
}
?>