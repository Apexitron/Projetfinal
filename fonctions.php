<?php
/* require 'appel_bdd.php'; */					//inser dans la BDD
/* require 'Authentificate.php';
 */
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
	}  */
	//FONCTION NOUVEAU UTILISATEUR
	function NewUser($cnx, $pseudo, $name, $firstname, $mail, $passwordd){	
		/*              $date=new DateTime();
		 */          /*   $req_ins="insert into user(pseudo_user, name_user, first_name_user, mail_user, password_user) VALUES (:pseudo_user, :name_user, :first_name_user, :mail_user, sha2(:password_user, 512))";
						$res_ins=$cnx->prepare($req_ins);
						$res_ins->execute(array(
												'pseudo_user'=>$pseudo,
												'name_user'=>$name,
												'first_name_user'=>$firstname,
												'mail_user'=>$mail,
												'password_user'=>$password
												));		*/
/* 												$passwordd=password_hash($passwordd, PASSWORD_DEFAULT);
 */												$req = $cnx->prepare('INSERT INTO user(pseudo_user, name_user, first_name_user, mail_user, password_user) VALUES (:pseudo_user, :name_user, :first_name_user, :mail_user, :password_user)');
												$req->execute(array(
													'pseudo_user'=>$pseudo,
													'name_user'=>$name,
													'first_name_user'=>$firstname,
													'mail_user'=>$mail,
													'password_user'=>$passwordd
													));

						}

	function forbidden()
	{
	  echo "Vous devez être connecté.e pour accéder à cette page";
      header('refresh:1;url=index.php');
      exit();
	}

	function profName()
	{
		if (isset($_SESSION["login"])) 
		{
			echo $_SESSION["login"];
		}
	}

	function Recherche()
	{

	}


	/* $query = "SELECT username from my_table where username='bob'";
$result = mysql_query($query);

if(mysql_num_rows($result) > 0)
{
    // row exists. do whatever you would like to do.
} */
	function inserJeu()
	{

	}
?>