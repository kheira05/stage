<?php 
include_once("config.php");

	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	/*$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);*/

	/*$connect = mysql_connect("localhost", "root", "");
	$base = mysql_select_db("login");*/

	

	//if($cpt=$requete_sql-> rowCount() > 0){
    
    	
   // }
    //else{
    	//echo "pas de resultat";
    //}



	$result = mysqli_query($connexion, "SELECT * from users where username = '$username' and password = '$password'")
					or die("Failed to query database ".mysqli_error($connexion));
	$row = mysqli_fetch_array($result);
	//on verifie s'ils sont vide 
	if (!empty($username)  && !empty($password)   ){
		//echo "Login success !!! Welcome " .$row['username'];	
		//on verifie si les deux données corresponde
		if ($row['username'] == $username && $row['password'] == $password){

			header("refresh:0; url=home.php");
	}
	}  
	else {
		header("refresh:0; url=index.php");
	}
	
	
?>