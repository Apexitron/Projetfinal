<?php 
try
  {
	   $connex= new PDO("mysql:host=localhost;dbname=website;charset=UTF8","root","root");
	   $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
	  catch (PDOException $e)
		  {
			echo utf8_encode($e->getMessage());
		  }
		  
?>
		  