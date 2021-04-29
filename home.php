<?php
   include_once("config.php");
include_once("action.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaires des personnes</title>
	<link rel="stylesheet" type="text/css" href="csshome/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style>
		body{
			background-color:white; 
		}

		h1,h4,h5,h6{
			color:black;
			text-align: center;
			text-shadow:0 1px 0 #ccc, 
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);color:#fff;

		}
		h2{
		color:black;	
		}
		
		
		.text-center-affichage{
			margin-left: 480px;
			margin-bottom: 30px;
		}
		a {
			margin-left: 25%;
		}
		hr{
			border-color: #999;

		}
		.table {
			margin-left: 5%;
		}
		tr,th,td{
			text-align: center;
			color: black;
		}

		input[type="text"], input[type="text"]{
			background-color: #999;

		} 
		
	</style>
		<script>
			//fonction qui nous affiche sans la fonction filtrer
			$(document).ready(function() {
    			showUser();
			});
			//requete ajax permet de faire des requetes de base de donnée dynamiquement
	function showUser( ) {
		var i = document.getElementById("implantation");
		var stragenti = i.value;
		
		var s = document.getElementById("structure");
        var stragents = s.value;
		var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() { 
	    	//affichage de la requete des qu'il y a un résultat
	      if (this.readyState == 4 && this.status == 200) {
	      	//afficher la reponse qu'il y a dans la dive user
	        document.getElementById("user").innerHTML = this.responseText;
	      }
	    };
	  if (stragenti =="0" && stragents == "0") {
	  	//affichage sans filtre
	    xmlhttp.open("GET","getuser.php?",true);
	    xmlhttp.send();
	    
	  
	  }  if(stragenti !="0" && stragents == "0"){
	   //affichage avec filtre pour implantation ("i")
	    xmlhttp.open("GET","getuser.php?i="+stragenti,true);
	     xmlhttp.send();
	  
	  }
	   if(stragenti =="0" && stragents != "0"){
	  	 xmlhttp.open("GET","getuser.php?s="+stragents,true);
	     xmlhttp.send();
	    

	  }
	   if(stragenti !="0" && stragents != "0"){
	  	xmlhttp.open("GET","getuser.php?s="+stragents+"&i="+stragenti,true);
	    xmlhttp.send();
	    
	  }

	}
	</script>
</head>
<body>
	<div class="container col-md-12">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<br>
				<h1 class="text-center">Accueil</h1>
				
				<a  href="ajouter.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter</a>
				<a style="margin-left: 30% !important;" href="deconnexion.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Deconnexion</a>
			
				<hr>
				<br>
			</div>
		</div>
		<!--filtrage start-->


			<div class="input-group mb-3">
	      		<div class="form-group">
                    <h2>Implantation :</h2>                 <!--this.value = str et implantation= type-->
                           <select class="custom-select" name="implantation" id="implantation"onchange="showUser()">
                           	<option name="id_implantation" value ="0">aucune</option>
                    
                           	<?php
					

					$sql = "SELECT * FROM implantation order by im_id";
					$query = mysqli_query($connexion, $sql);

					while ($row = mysqli_fetch_assoc($query)) 
					{
						
					
					?>
				
						<option name="id_implantation" value ="<?php echo $row['im_id'];?>"><?php  echo $row['libelle']; ?></option>
                    
                        <?php
                        }
                    ?>
                        </select>
                    <br><br><br>
                    </div>
                </div>
                <div class="input-group mb-3">
	      			<div class="form-group">
                    	<div class="form-group">
                    	<h2>Structure :</h2>
                           <select class="custom-select" name="structure" id="structure" onchange="showUser()">
                           	<option name="id_structure" value ="0">aucune</option>
                   	<?php
					include_once("config.php");

					$sql = "SELECT * FROM structure order by id_stru";
					$query = mysqli_query($connexion, $sql);

					while ($row = mysqli_fetch_assoc($query)) 
					{
						
					
					?>
				
						<option name="id_structure" value ="<?php echo $row['id_stru'];?>"><?php  echo $row['libelle']; ?></option>
                    
                        <?php
                        }
                    ?>
                        </select>
                    <br><br><br>
                    </div>
                </div>
            </div>
                
		<!--filtrage fin-->
		<!--formulaire d'afficher la bd!-->
		<div class="row">
			<div class="col-md-8">
			<br>
			<h3 class="text-center-affichage">Affichage de tous les employés</h3>
			
			<div class="table table-hover" id="user">
			
			</div>
			</div>

			
		
				</form>	
			</div>
		</div>
	</div>
	
</body>
</html>

