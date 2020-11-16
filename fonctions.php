<?php
/* require 'appel_bdd.php'; */					//inser dans la BDD
require 'Authentificate.php';

//CHANGER LA PREMICE KRISS DE TABARNAC DE MARDE

/* function aff_categorie($connex){

	$req_count="SELECT COUNT(id_categorie) AS 'nb' FROM categorie_cosplay";
	$res_count=$connex->prepare($req_count);
	$res_count->execute();
	$sel=$res_count->fetch();
	$nb=$sel['nb'];
	
	
		$req_sel = SELECT  u.img_user, u.pseudo_user FROM user u, play p, videogame v WHERE u.id_user=p.id_user AND p.id_videogame=v.id_videogame AND v.name_videogame=$_POST['jeu'];
		$res_sel=$connex->prepare($req_sel);
		$res_sel->execute();
		$sel=$res_sel->fetchAll();
		$aff_sel='<div class="col-10 col-xs-7 col-lg-5 mb-5 mx-auto rectjeu">
		<div class="col-8 text-center mx-auto mt-3"><h2>'.$_SESSION["image"].'/h2></div>
		<div class="col-8 text-center mx-auto mt-3"><h2>'.$_SESSION["username"].'/h2></div>
  </div>';
	
			foreach ($sel AS $v):
				$aff_sel.='<option value="'.$v['id_categorie'].'">'.$v['libelle_categorie'].'</option>';
			endforeach;
	
		echo $aff_sel;;
		echo'</select></div>';
	} */
	

	function Deconnexion ()
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
	header('refresh:2;url=index.php');
	}

	function profName()
	{
		if (isset($_SESSION["login"])) 
		{
			echo $_SESSION["login"];
		}
	}

?>