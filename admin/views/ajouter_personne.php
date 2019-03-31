<?php
include "../entities/personne.php" ;
include "../core/personneC.php" ;

if ( isset($_GET['mail']) && isset($_GET['nom']) && isset($_GET['tel'])&& isset($_GET['permis'])&& isset($_GET['date']) ) 
{
    $nom=$_GET['nom'];


	$mail=$_GET['mail'];
	$tel=$_GET['tel'];
	$permis=$_GET['permis'];
	$date=$_GET['date'];
	
if ( isset($_GET['mail']) && isset($_GET['nom']) && isset($_GET['tel'])&& isset($_GET['permis'])&& isset($_GET['date']) ) 
	{
		$p=new Livreur($nom,$mail,$tel,$permis,$date);
		$LivreurC=new LivreurC();
		$mes=$LivreurC->ajouter($p);
		if ($mes==true) 
		{
			echo "ajout avec succees";
		}		
					header('Location:formelements.php');

}
}
?>