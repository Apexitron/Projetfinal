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
	<body>
		<?php //require ('header.php'); ?>
		<input type="checkbox" id="check">
		<label for="check">
			<i class="fas fa-bars" id="btn"></i>
			<i class="fas fa-times" id="cancel"></i>
		</label>
		<!-- sidebar filtres -->
			<i class="fas fa-bars" id="opfilter" onclick=openFilters()></i>
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
						
				</div>	
		
			<div class="container-fluid reste">
				<div class="row">
				
				</div>	
			</div>   
			<script src="script.js"></script> 
	</body>
 </html>