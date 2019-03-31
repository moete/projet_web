<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_POST['submit']))
		{$to='moetez.boubakri@esprit.tn';
         $sujet='test mail en local';
         $texte=$_POST['texte'];
         $header='From :test@gmail.com';
         mail($to, $sujet,$texte,$header);

         }
         ?>
	<form action="" method="post">
		<textarea name="texte" rows="5" cols="30"></textarea> <br>
		<input type="submit" name="submit" value="envoyer">

	</form>

</body>
</html>