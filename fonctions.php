<?php
require 'appel_bdd.php';					//inser dans la BDD

 $connex= new PDO("mysql:host=localhost;dbname=chasse;charset=UTF8","root","root");
	   $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
//FONCTION AFFICHAGE LISTE DES CHASSES
Function MontrerChasse(){
	  $connex= new PDO("mysql:host=localhost;dbname=chasse;charset=UTF8","root","root");
	   $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	   
	$req_sel='select * from chasse';
	$res_sel=$connex->prepare($req_sel);
	$res_sel->execute();
	$aff_sel="<div class='col-3 text-center mx-auto b'>Liste des chasses</div>";
	$sel=$res_sel->fetchAll();
	
	foreach ($sel as $v):
	$aff_sel.="<div class='row oui'><div class='col-2 mx-auto text-center btest'>| Id:".$v['id_chasse']."</div>"."\n";
	$aff_sel.="<div class='col-2 mx-auto text-center btest'>| Lieu :" .$v['lieu_chasse']."</div>"."\n";
	$aff_sel.="<div class='col-2 mx-auto text-center btest'>| ID pecheur :" .$v['id_pecheur']."</div>";
	$aff_sel.="<div class='col-2 mx-auto text-center btest'>| Date :" .$v['date_chasse']."</div></div>"."\n";
	endforeach;
	echo $aff_sel;
}
// AFFICHAGE DES CHASSES DE L'USER CONNECTÉ
Function MontrerChasseUser($connex, $id_pecheur){  
	$req_sel='select * from chasse where id_pecheur=:id_pecheur';
	$res_sel=$connex->prepare($req_sel);
	$res_sel->execute(array(':id_pecheur'=>$id_pecheur));						
	$aff_sel="<div class='col-3 text-center mx-auto b'>Liste des chasses</div>";
	$sel=$res_sel->fetchAll();
	echo '<form action="" method="post"><div class="row"><select class="col-sm-3 mx-auto">';
	foreach ($sel as $v):
	$aff_sel.="<option>".$v['date_chasse'].""."/"."".$v['lieu_chasse']."</option>";
	/*$aff_sel.="<div class='row oui'><div class='col-2 mx-auto text-center btest'>| Id:".$v['id_chasse']."</div>"."\n";
	$aff_sel.="<div class='col-2 mx-auto text-center btest'>| Lieu :" .$v['lieu_chasse']."</div>"."\n";
	$aff_sel.="<div class='col-2 mx-auto text-center btest'>| ID pecheur :" .$v['id_pecheur']."</div>";
	$aff_sel.="<div class='col-2 mx-auto text-center btest'>| Date :" .$v['date_chasse']."</div></div>"."\n";*/
	endforeach;
	$aff_sel.= '</select></div>';
	$aff_sel.='<div class="row"><input class="col-sm-3 mx-auto" type="submit" name="afficher" value="Afficher"></div></form>';
	echo $aff_sel;
}

//AFFICHAGE DES DÉTAILS D'UNE CHASSE (VIA LE SELECT CI-DESSUS)
Function DetailsChasse($connex, $id_chasse, $id_chasse2){
	$req_sel='select * from chasse where id_chasse=:id_chasse';
	$req_sel2='select * from tuer where id_chasse2=:id_chasse2';
	$res_sel=$connex->prepare($req_sel);
	$res_sel2=$connex->prepare($req_sel2);
	$res_sel->execute(array(':id_chasse'=>$id_chasse));
	$res_sel2->execute(array());	
	$aff_sel="<div class='col-3 text-center mx-auto b'>Liste des chasses</div>";
}

// FONCTION AFFICHAGE LISTE CHASSEURS
Function MontrerChasseur($connex){
	   
	$req_sel='select * from pecheur';
	$res_sel=$connex->prepare($req_sel);
	$res_sel->execute();
	$aff_sel="<div>Liste des pecheurs</div>";
	$sel=$res_sel->fetchAll();
	
	foreach ($sel as $v):
	$aff_sel.="<div class='row'><div class='col-2'>".$v['pseudo_pecheur']."</div></div>";
	endforeach;
	echo $aff_sel;
}
	// FONCTION NOUVELLE ENTREE PECHE
	function InputData($connex, $lieu_chasse, $date_chasse, $id_pecheur){
	$date_chasse=strtotime($date_chasse);		
	$req_ins="insert into chasse values(0, :lieu_chasse, :date_chasse, :id_pecheur)";
	$res_ins=$connex->prepare($req_ins);
	$res_ins->execute(array(':lieu_chasse'=>$lieu_chasse,							
							':date_chasse'=>date('Y-m-d', $date_chasse),
							':id_pecheur'=>$id_pecheur
							));	
	return $lastid=$connex->lastInsertId();						
	};
	
	//FONCTION NOUVEAU PECHEUR
		function NewPecheur($connex, $pseudo_pecheur, $mdp_pecheur){	
	$date=new DateTime();
	$req_ins="insert into pecheur values(0, :pseudo_pecheur,  sha2(:mdp_pecheur, 512))";
	$res_ins=$connex->prepare($req_ins);
	$res_ins->execute(array(
							':pseudo_pecheur'=>$pseudo_pecheur,
							':mdp_pecheur'=>$mdp_pecheur
							));		
		}
	//CONNEXION AU SITE
	function Connexion($connex, $login, $mdp) {  
	$req_con="select count(pseudo_pecheur) FROM pecheur WHERE pseudo_pecheur=:pseudo_pecheur and mdp_pecheur=sha2(:mdp_pecheur, 512)";
	$res_con=$connex->prepare($req_con);
	$res_con->execute(array(':pseudo_pecheur'=>$login,
							':mdp_pecheur'=>$mdp
							));
	return $res_con->fetch()[0];
	}			

	function Session ($connex, $pseudo_pecheur) {		//Fonction pour récupérer les données de l'utilisateur dans une session
		$req_maj="select pseudo_pecheur, mdp_pecheur, id_pecheur from pecheur where pseudo_pecheur=:pseudo_pecheur";
			$res_maj=$connex->prepare($req_maj);
			$res_maj->execute(array( ':pseudo_pecheur'=>$pseudo_pecheur,	
								));
		return $res_maj->fetch();	
	}
	
	function RecupBDD($x){
	$req_sell='select id_poisson, espece_poisson from poisson';
	$res_sell=$x->prepare($req_sell);
	$res_sell->execute();
	$sell=$res_sell->fetchAll();
	return $sell;
	};
	
	function AffPlusBDD($x){
	for ($i = 1; $i <= $_SESSION['nb_type_poisson']; $i++) {
	$lb="<div class='row'><select name='".$i."''id='id_poisson".$i."'size='1' class='col-sm-4 mx-auto'>";
	$req_sell='select id_poisson, espece_poisson from poisson';
	$res_sell=$x->prepare($req_sell);
	$res_sell->execute();
	$sell=$res_sell->fetchAll();
	
	foreach($sell as $v){
		$lb.="<option value='".$v[0]."'>".$v[1]."</option>";
	};
	$lb.="</select></div><div class='row'><input type='number' name='nombre_poisson' class='col-sm-4 mx-auto'></input></div>";
	echo $lb;
	}};
	
	

	/* function AffChamps ($nb_type_poisson, $y) {
		if(isSet($_POST["envoi"])){		
					$nb_type_poisson=$_POST['nb_type_poisson'];
				
	for ($x = 1; $x <= $nb_type_poisson; $x++) {
			
			echo "<div class='row'>
					<select name='poisson".$x."'class='col-sm-4 mx-auto'>";
						
					echo "<option value='".$y[0][0]."'>".$y[0][1]."</option>
						<option value='".$y[1][0]."'>".$y[1][1]."</option>
						<option value='".$y[2][0]."'>".$y[2][1]."</option>
						<option value='".$y[3][0]."'>".$y[3][1]."</option>
					</select>
				</div>
				<div class='row'>
						<input class='col-sm-4 mx-auto' name='nombre_poisson' type='number'></input>
				</div>";
		}
	}
	}; */
	
	function InserPoisson($connex, $id_chasse, $id_poisson, $nb_poisson){		
	$req_ins="insert into tuer values(:id_chasse,:id_poisson ,:nbPoisson_tuer)";
	$res_ins=$connex->prepare($req_ins);
	$res_ins->execute(array(
	':id_chasse'=>$id_chasse,
	':id_poisson'=>$id_poisson,
	':nbPoisson_tuer'=>$nb_poisson							
							));						
	};
	
	/*function RecupID ($connex){
		$req_ins="insert into chasse values(NULL)";
		$res_ins=$connex->prepare($req_ins);
		$res_ins->execute(array(
					
								));
		lastInsertId($res_ins);							
	}*/
	
	



// function Connect($connex, $_POST['login'], $_POST['password']) {
// $stmt = $connex->prepare("SELECT * FROM user WHERE login_user = ?");
// $stmt->execute([$_POST['login']]);
// $user = $stmt->fetch();

// if ($user && password_verify($_POST['password'], $user['password']))
// {
    // echo "valid!";
// } else {
    // echo "invalid";
// }	
// }	

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
?>