
<?php
include "../entities/personne.php";
include "../core/personneC.php";
if (isset($_GET['mail'])){
	$personneC=new EmployeC();
    $result=$personneC->getemail($_GET['mail']);
	foreach($result as $row){
		$nom=$row['nom'];
		$mail=$row['mail'];
		$tel=$row['tel'];
		$permis=$row['permis'];
		$date=$row['date'];
	
		?>

 	