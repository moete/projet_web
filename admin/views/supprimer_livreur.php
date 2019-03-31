<?php
include "../core/personneC.php";

$LivreurC=new LivreurC();
if (isset($_POST["mail"]))
	{ 
	 
	$LivreurC->supprimerLivreur($_POST["mail"]);
	header('Location:formelements.php');
}

?>