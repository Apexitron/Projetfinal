<?php
session_start();
ini_set('display_errors', 1);
require "Authentificate.php";
require "fonctions.php";
$conn=new Pdo_connexion();
$cnx=$conn->LoadPdo();
?>
<!DOCTYPE html>
 <html>
	<head>
		<meta charset=UTF-8>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<div class="container-fluid main">
			<div class="row">
				<img src="https://iutv.univ-paris13.fr/wp-content/uploads/logo-rond-twitter.png" class="col-sm-10 col-lg-8 logo img-fluid mx-auto">
			</div>
			<div class="row">
				<form class="col-sm-8 col-lg-8 mx-auto text-center" method="POST" action="">
					<h1 class="title">Connexion</h1>
					<div class="col-sm-7 col-lg-7 text-center mx-auto"><input type="text"  class="champ" value="login" name="login" ></input>
					<input type="password" class="champ" name="password" value="password" ></input></div>
					<div class="col-sm-2 mx-auto text-center"><input type="submit"></input></div>
				</form>
			</div>
			<div class="row">
					<div class="col-sm-4 mx-auto text-center"><a id="sign-up" class="sign-up" href="#sign-up-popup">Pas de compte ? Inscrivez vous</a></div>
					<div id="sign-up-popup" class="popup-overlay">
						<div class="sign-up-form-container col-sm-8 text-center">
							<form method="post" action="">
								<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
								<h1>Inscription</h1>
								<hr/>
								<p>Pseudo</p>
								<input type="text" name="pseudo"/>
								<p>Nom</p>
								<input type="text" name="name"/>
								<p>Prénom</p>
								<input type="text" name="firstname" />								
								<p>Adresse mail</p>
								<input type="mail" name="mail" />
								<p>Mot de passe</p>
								<input type="password" name="inspassword"/>
								<p>Confirmer le mot de passe</p>
								<input type="password" name="confirmpassword"/>
								<input type="submit" value="Envoyer" name="Signup" />
							</form>
		
						</div>
    
					</div>
					</div>	
					<script>
			$('#sign-up').click(function(){
			var target = $(this).attr('href');
				$(target).fadeToggle('fast');
			});

			/* $('#sign-up-popup').click(function(){
				$(this).fadeOut('fast');
			}); */
		</script>
	</body>
 </html>
 <?php 
 		if(isset($_POST["login"], $_POST["password"]))
 		{
			 new Authentificate($_POST["login"], $_POST["password"]);
  			exit();	
		}
		
		 if(isset($_POST["Signup"]))
 		{
/* 			 $cnx=new Pdo_connexion();
 */			 $pseudo=$_POST['pseudo'];
			 $name=$_POST['name'];
			 $firstname=$_POST['firstname'];
			 $mail=$_POST['mail'];
			 $password=$_POST['inspassword'];
			 $confirmpassword=$_POST['confirmpassword'];
				if($password===$confirmpassword)
				{
/* 					var_dump($cnx);
 				die();*/	
					NewUser($cnx, $pseudo, $name, $firstname, $mail, $password);
					echo "<p class='col-sm-10 text-center mx-auto wrong'>Compte créé, vous pouvez maintenant vous connecter</p>";
					exit();		
				} 
  			
		}
		else
		{
			exit();	
		}
?>