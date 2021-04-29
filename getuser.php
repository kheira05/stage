<?php
   include_once("config.php");
//include_once("action.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaires des personnes</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
		
</head>
<body>
	<div class="container col-md-12">
		
		
		<!--formulaire d'afficher la bd!-->
		
			<table class="table table-bordered table-striped">
				<thead>
					<tr>

						<th width="20%">ID</th>
						<th width="10%">Nom</th>
						<th width="25%">Prenom</th>
						<th width="15%">Age</th>
						<th width="15%">implantation</th>
						<th width="15%">structure</th>
						<th width="15%">mail</th>
						<th width="15%">Adresse IP</th>
						<th width="15%">Inventaire fixe</th>
						<th width="15%">Inventaire Affecté</th>
						<th width="15%">Poste Affecté</th>
						<th width="15%">Jour télétravail</th>
						

						<th  width="20%" colspan="2 " align="center">Action</th>
					</tr>
				</thead>
				
				<tbody>
					<!-- connection a la base de données plus récuperation des données !-->
					<?php
					include_once("config.php");
					$sql = "SELECT agent.id ,agent.fname ,agent.Iname ,agent.age ,agent.mail ,agent.adresse_ip ,agent.num_inventaire_fixe, agent.num_inventaire_affecte, agent.origine_poste_affecte, GROUP_CONCAT(jt_libelle) as jour_teletravail, structure.libelle as structure, implantation.libelle as implantation FROM agent 
					INNER JOIN implantation ON agent.id_implantation = implantation.im_id
					INNER JOIN structure ON agent.id_structure = structure.id_stru
					inner JOIN jour on agent.id = j_u_id
                    inner join jour_teletravail on j_jt_id = jt_id 
                    ";
					
					if((isset($_GET['s']) && $_GET['s'] >0) && (isset($_GET['i']) && $_GET['i'] >0)){
						$s = intval($_GET['s']);
						$i = intval($_GET['i']);
						//requete sql avec filtre avec les deux
						
						 $sql = $sql." WHERE id_stru = '".$s."'AND im_id = '".$i."' GROUP BY id order by id";
                  
					}
					elseif(isset($_GET['s']) && $_GET['s'] >0){
						$s = intval($_GET['s']);
						//requete sql avec filtre pour s
					
						
                   $sql = $sql ." WHERE id_stru = '".$s."' GROUP BY id order by id";

					}
					elseif (isset($_GET['i']) && $_GET['i'] >0 ) {
						$i = intval($_GET['i']);
						
						//requete sql avec filtre pour i
                   $sql = $sql . " WHERE im_id = '".$i."' GROUP BY id order by id";
					
					}

					
					else{
						//requete sql sans filtre
						 $sql = $sql."GROUP BY id order by id";
						
					}
					
					$query = mysqli_query($connexion, $sql);
					

					while ($row = mysqli_fetch_assoc($query)) 
					{
						
					
					?>
					<tr>
						<td><?php  echo $row['id']; ?></td>
						<td><?php  echo $row['fname']; ?></td>
						<td><?php  echo $row['Iname']; ?></td>
						<td><?php  echo $row['age']; ?></td>
						<td><?php  echo $row['implantation']; ?></td>
						<td><?php  echo $row['structure']; ?></td>
						<td><?php  echo $row['mail']; ?></td>
						<td><?php  echo $row['adresse_ip']; ?></td>
						<td><?php  echo $row['num_inventaire_fixe']; ?></td>
						<td><?php  echo $row['num_inventaire_affecte']; ?></td>
						<td><?php  echo $row['origine_poste_affecte']; ?></td>
						<td><?php  echo $row['jour_teletravail']; ?></td>
						
						
						<td><a href ="action.php?delete=<?php echo $row['id']?>" onclick="return confirm('Voulez-vous supprimer une personne ?')"class="btn btn-danger">Supprimer</a></td><td><a href ="modifier.php?edit=<?php echo $row['id']?>" class="btn btn-info">Modifier</a></td>
					</tr>
					<?php 
				     }
				     ?>
				     
				</tbody>
			</table>
			</div>
			</div>

			
		
				</form>	
			</div>
		</div>
	</div>

</body>
</html>

