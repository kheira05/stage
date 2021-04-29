<?php
	include_once("config.php");

	$id ="";
	$nom ="";
	$prenom="";
	$mail="";
	$adresse_ip="";
	$inventaire_fixe="";
	$inventaire_affecte="";
	$poste_affecte="";


	$modifier ="";

	//Button Ajouter
	if (isset($_POST['btn_Ajout'])) {
		
		//echo"ok";
		//declaration variable
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$id_implantation = $_POST['implantation'];
		$id_structure = $_POST['structure'];
		$mail = $_POST['mail'];
		$adresse_ip = $_POST['adresse_ip'];
		$inventaire_fixe = $_POST['inventaire_fixe'];
		$inventaire_affecte = $_POST['inventaire_affecte'];
		$poste_affecte = $_POST['poste_affecte'];
		$jour_teletravail = $_POST['check_list'];
		
		
		
		

					
						$sql = "INSERT INTO agent( Fname,Iname,id_implantation,id_structure,mail,adresse_ip,num_inventaire_fixe,num_inventaire_affecte,origine_poste_affecte) 
						Values('$nom','$prenom','$id_implantation', '$id_structure', '$mail','$adresse_ip','$inventaire_fixe','$inventaire_affecte','$poste_affecte')";
		

		$query = mysqli_query($connexion, $sql) ;
		if($query)
		{
			//récuperation de l'id du dernier utilisteur crée 
			$sql2 ="SELECT MAX(id) as id_u FROM agent ";
			$query2 = mysqli_query($connexion, $sql2) ;
			if ($query2){
				while ($row = mysqli_fetch_assoc($query2)) {

					//pour chaque ligne du tableau jour_teletravail pour les colonne jour
					foreach ($jour_teletravail as $jour) {
						//insertion pour le dernier utilisateur les jours coché 
						$sql3 ="INSERT INTO jour(j_u_id,j_jt_id)
						Values('$row[id_u]','$jour')";
						$query3 = mysqli_query($connexion, $sql3) ;
					}
				}
			}
			header("refresh:0; url=home.php");
				}
		else{
			echo"Erreur de l'enregistrement";
		}
		
	
	}

	//Button Supprimer
	if (isset($_GET['delete'])) 
	{
		$id = $_GET['delete'];

		$sql ="DELETE FROM agent WHERE id='$id'";
		$query = mysqli_query($connexion, $sql);
		if($query)
		{
			header("refresh:0; url=home.php");
		}
		
	}

	//Affiche la zone de text
	if (isset($_GET['edit']))
	{
		$id = $_GET['edit'];
		
		$sql ="SELECT * FROM agent WHERE id='$id'";
		$query = mysqli_query($connexion, $sql);

		$row = mysqli_fetch_array($query);

		$id = $row['id'];
		$nom = $row['fname'];
		$prenom = $row['Iname'];
		//$date = $row['date'];
		$implantation = $row['id_implantation'];
		$structure = $row['id_structure'];
		$mail = $row['mail'];
		$adresse_ip = $row['adresse_ip'];
		$inventaire_fixe = $row['num_inventaire_fixe'];
		$inventaire_affecte = $row['num_inventaire_affecte'];
		$poste_affecte = $row['origine_poste_affecte'];
		
		

	$modifier = true;	

	}

	//Button Modifier
	if(isset($_POST['btn_edit']))
	{
		$id = $_POST['id'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		//$date = $_POST['date'];
		$id_implantation = $_POST['implantation'];
		$id_structure = $_POST['structure'];
		$mail = $_POST['mail'];
		$adresse_ip = $_POST['adresse_ip'];
		$inventaire_fixe = $_POST['inventaire_fixe'];
		$inventaire_affecte = $_POST['inventaire_affecte'];
		$poste_affecte = $_POST['poste_affecte'];
		

		$sql ="UPDATE agent SET fname='$nom', Iname='$prenom', id_implantation='$id_implantation', 
		id_structure='$id_structure', mail='$mail', adresse_ip='$adresse_ip', num_inventaire_fixe='$inventaire_fixe',
		 num_inventaire_affecte='$inventaire_affecte', origine_poste_affecte='$poste_affecte' WHERE id='$id'";
		$query = mysqli_query($connexion, $sql);

		if($query)
		{
			header("refresh:0; url=home.php");
		}
		else{
			echo"Erreur de l'enregistrement";
		}
		

	}
?>