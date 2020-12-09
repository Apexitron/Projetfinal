<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
ini_set('display_errors', 1);
 include 'fonctions.php';
/*  include 'Authentificate.php';
 */
 if (!isset($_SESSION["session"]))
 {
      forbidden();
 }?>
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
        <script src="script.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <style>@import url('https://fonts.googleapis.com/css2?family=Russo+One&display=swap');</style>
        <style>@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');</style>
	</head>
	<body class="bodyprof">
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
   <?php require ('header.php'); ?>
		<div class="container-fluid">
			  <div class="row">
            <div class="col-sm-12 haut"></div>
        </div>
        <div class="row">    
            <div class="col-sm-12 reste">
                  <!-- ajouter fonction pour changer la src selon l'utilisateur  -->
                  <div class="col-sm-12 text-center "><img class="logoprof mx-auto" src="https://iutv.univ-paris13.fr/wp-content/uploads/logo-rond-twitter.png"></img></div>
                  <div class="col-sm-6 col-lg-8 text-center mx-auto name"><h1 class="profname">
                  <?php profName(); /* var_dump($_SESSION) */?>
                        </h1>
                        </div>
                  <div class="col-sm-6 col-lg-8 text-center mx-auto bio"><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae nisl posuere, fermentum lacus et, aliquam libero.
                    Morbi nisl diam, tincidunt a ipsum id, consequat sodales neque. Duis pellentesque neque sit amet leo luctus fringilla. Donec a nisi aliquet, pharetra ante ac, tincidunt sem.
                      Nunc vulputate ligula purus, quis faucibus dolor ultrices non. Aliquam ut fringilla tortor. Maecenas eu lacus sem. </p></div>
              <div class="row">    
                  <div class="col-10 col-xs-7 col-lg-5 mb-5 mx-auto rectjeu">
                        <div class="col-8 text-center mx-auto mt-3"><h2>Nom du jeu</h2></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Niveau de jeu de l'utilisateur</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Nom d'utilisateur IG</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Afficher horaires cochées pour le jeu</p></div>
                  </div>
                  <div class="col-10 col-xs-7 col-lg-5  mb-5 mx-auto rectjeu">
                        <div class="col-8 text-center mx-auto mt-3"><h2>Nom du jeu</h2></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Niveau de jeu de l'utilisateur</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Nom d'utilisateur IG</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Afficher horaires cochées pour le jeu</p></div>
                  </div>
                  <div class="col-10 col-xs-7 col-lg-5  mb-5 mx-auto rectjeu">
                        <div class="col-8 text-center mx-auto mt-3"><h2>Nom du jeu</h2></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Niveau de jeu de l'utilisateur</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Nom d'utilisateur IG</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Afficher horaires cochées pour le jeu</p></div>
                  </div>
                  <div class="col-10 col-xs-7 col-lg-5  mb-5 mx-auto rectjeu">
                        <div class="col-8 text-center mx-auto mt-3"><h2>Nom du jeu</h2></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Niveau de jeu de l'utilisateur</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Nom d'utilisateur IG</p></div>
                        <div class="col-8 text-center mx-auto mt-3"><p>Afficher horaires cochées pour le jeu</p></div>
                  </div>       
            </div>
        </div>	
      </div>    
	</body>
 </html>