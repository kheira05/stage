<?php
include_once("config.php");
mysqli_close($connexion);	
header('Location: index.php');
?>