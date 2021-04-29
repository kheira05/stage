<?php
	//connexion au Serveur
	$connexion = mysqli_connect('localhost', 'root', '') or die("Erreur connexion au serveur !");
	//selection de la base données
	$db = mysqli_select_db($connexion, 'test_db') or die ("Erreur selection la base de données") ;

	
	
?>