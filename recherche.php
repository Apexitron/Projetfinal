<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
 <html>
	<head>
		<meta charset=utf-8>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body class="bodysearch">
	<div class="container-fluid">
			  <div class="row">
            <div class="col-sm-12 haut"></div>
        </div>
		
		<?php //require ('header.php'); ?>
		<input type="checkbox" id="check">
		<label for="check">
			<i class="fas fa-bars" id="btn"></i>
			<i class="fas fa-times" id="cancel"></i>
		</label>
		<!-- sidebar filtres -->
			<i class="fas fa-angle-double-right" id="opfilter" onclick=openFilters()></i>
			<i class="fas fa-times" id="clfilter" onclick= closeFilters()></i>
				<div id="filters">
					
					<h4>Plateforme :</h4>
						<select name="plateforme" id="plateforme">						
						<option value="ps4" name="ps4" id="ps4"><label for="ps4">Playstation 4</label>
						<option value="xbox" name="xbox" id="xbox"><label for="xbox">Xbox</label>
						<option value="switch" name="switch" id="switch"><label for="switch">Nintendo Switch</label>
						<option value="pc" name="pc" id="pc"><label for="pc">PC</label>
						</select>	
							<h4>Jeu :</h4>
						<select  name="jeu" id="jeu">	
							<option value="lol" name="lol" id="lol"><label for="lol">League of Legends</label>
							<option value="cod" name="cod" id="cod"><label for="cod">Call of Duty : INSERER NOM DE JEU</label>
							<option value="rl" name="rl" id="rl"><label for="rl">Rocket League</label>
							<option value="ssbm" name="ssbm" id="ssbm"><label for="ssbm">Super Smash Bros Melee</label>
						</select>
							<h4>Horaires :</h4>
						<select  name="jeu" id="jeu">	
							<option value="any" name="any" id="any"><label for="any">Tout le temps</label>
							<option value="eve" name="eve" id="eve"><label for="eve">Soirs de semaine</label>
							<option value="we" name="we" id="we"><label for="we">Le w-e</label>
<!-- 							<option value="ssbm" name="ssbm" id="ssbm"><label for="ssbm">Super Smash Bros Melee</label>
 -->					</select>						
				</div>	
		
			<div class="container-fluid reste">
				<div class="row">
				<div class="col-10 col-xs-7 col-lg-5 mb-5 mx-auto rectjeu">
                        <div class="col-8 text-center mx-auto mt-3"><h2>Nom du jeu</h2></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Niveau de jeu de l'utilisateur</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Nom d'utilisateur IG</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Afficher horaires cochées pour le jeu</p></div>
                  </div>
				  <div class="col-10 col-xs-7 col-lg-5 mb-5 mx-auto rectjeu">
                        <div class="col-8 text-center mx-auto mt-3"><h2>Nom du jeu</h2></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Niveau de jeu de l'utilisateur</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Nom d'utilisateur IG</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Afficher horaires cochées pour le jeu</p></div>
                  </div>
				  <div class="col-10 col-xs-7 col-lg-5 mb-5 mx-auto rectjeu">
                        <div class="col-8 text-center mx-auto mt-3"><h2>Nom du jeu</h2></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Niveau de jeu de l'utilisateur</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Nom d'utilisateur IG</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Afficher horaires cochées pour le jeu</p></div>
                  </div>
				  <div class="col-10 col-xs-7 col-lg-5 mb-5 mx-auto rectjeu">
                        <div class="col-8 text-center mx-auto mt-3"><h2>Nom du jeu</h2></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Niveau de jeu de l'utilisateur</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Nom d'utilisateur IG</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Afficher horaires cochées pour le jeu</p></div>
                  </div>
				</div>	
			</div>   
			<script src="script.js"></script> 
	</body>
 </html>