<?php
   include_once("config.php");
include_once("action.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaires des personnes</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="cssajouter/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="cssajouter/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="cssajouter/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="cssajouter/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="cssajouter/css/main.css" rel="stylesheet" media="all">
	<style>
		body{
			background-color:white; 
		}
		.whitespace{
			width: 100%;
			height: 100px;
		}
		h1,h2,h3,h4,h5,h6{
			color:black;
		}
		hr{
			border-color: #999;
		}
		tr,th,td{
			color: black;
		}
		.col-md-4 {
			margin-left:33% ;
		}
		input[type="text"], input[type="text"]{
			background-color: #999;

		}
	</style>
</head>
<body>
	<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Formulaires des personnes</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                           <input type="hidden"  name="id" class="form-control" value ="<?php echo $id;?> "placeholder="Tapez le nom"/>
                                            <input type="text"  name="nom"value ="<?php echo $nom;?>" class="input--style-5"/>
                                            <label class="label--desc">Nom </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            
                                            <input type="text"  name="prenom" value ="<?php echo $prenom;?>" class="input--style-5"  />
                                            <label class="label--desc">Prenom </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="form-row">
                            <div class="name">implantation</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="implantation" >
                                           <?php
                                             include_once("config.php");
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
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                   
                                    <input class="input--style-5" type="mail" name="mail" value ="<?php echo $mail;?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Adresse IP</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input type="text" class="input--style-5" value ="<?php echo $adresse_ip;?>" type="text" name="adresse_ip">
                                            <label class="label--desc">adresse ip</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                        <div class="form-row">
                            <div class="name">structure</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="structure">
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
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        
                         <div class="form-row">
                            <div class="name">Inventaire Fixe:</div>
                            <div class="value">
                                <div class="input-group">
                                   
                                    <input class="input--style-5" type="text" name="inventaire_fixe" value ="<?php echo $inventaire_fixe;?>" class="form-control" >
                                </div>
                            </div>
                        </div>

                         <div class="form-row">
                            <div class="name">Inventaire Affecté :</div>
                            <div class="value">
                                <div class="input-group">
                                   
                                    <input class="input--style-5" type="text" name="inventaire_affecte" value ="<?php echo $inventaire_affecte;?>" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Poste Affecté :</div>
                            <div class="value">
                                <div class="input-group">
                                   
                                    <input class="input--style-5" type="text" name="poste_affecte" value ="<?php echo $poste_affecte;?>" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-row p-t-20">
                            <label class="label label--block">Jour teletravail</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">lundi
                                    <input type="checkbox" checked="checked" name="check_list[]" value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container m-r-55">Mardi
                                    <input type="checkbox" checked="checked" name="check_list[]" value="2">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container m-r-55">Mercredi
                                    <input type="checkbox" checked="checked" name="check_list[]" value="3">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container m-r-55">Jeudi
                                    <input type="checkbox" checked="checked" name="check_list[]" value="4">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container m-r-55">Vendredi
                                    <input type="checkbox" checked="checked" name="check_list[]" value="5">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
					
					<div class="form-group">
						<?php if($modifier==true){ ?>
							<input type="submit" name="btn_edit" class ="btn btn-success btn-block" value="Modifier" />
							<?php } else{ ?>
							     <input type="submit" name="btn_Ajout" class ="btn btn-primary btn-block" value="Enregistrer" />
							<?php } ?>
						<hr>
						<a href="home.php" id="cancel" name="cancel" class="btn btn-danger btn-block">Annuler</a>
					</div>
					
				</form>	
			</div>
		</div>
	</div>
 <!-- Jquery JS-->
    <script src="cssajouter/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="cssajouter/vendor/select2/select2.min.js"></script>
    <script src="cssajouter/vendor/datepicker/moment.min.js"></script>
    <script src="cssajouter/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="cssajouter/js/global.js"></script>
</body>
</html>