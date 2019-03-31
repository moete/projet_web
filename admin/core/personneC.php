<?php

include "../config.php";
 
class LivreurC
{
	function ajouter($Livreur)
	{
		$sql="insert into livreur (nom,mail,tel,permis,date) values (:nom,:mail,:tel,:permis,:date)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
            $nom=$Livreur->getnom();
	     	$mail=$Livreur->getemail();
	     	$date=$Livreur->getdate();
	     	$tel=$Livreur->gettel();
	     	$permis=$Livreur->getpermis();
	    	$req->bindValue(':nom',$nom);
	    	$req->bindValue(':mail', $mail);	
	      	$req->bindValue(':tel',$tel);
	    	$req->bindValue(':permis',$permis);
	     	$req->bindValue(':date',$date);

	    	$req->execute();
	    	echo 'ok';
        }
    
    catch(Exception $e)
	    {
		    echo 'Erreur' .$e->getMessage() ;
	    }
		
	}
	function afficherLivreur(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivreur($mail){
		$sql="DELETE FROM livreur where mail= :mail";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':mail',$mail);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function modifierlivreur($Livreur,$mail){
		$sql="UPDATE livreur SET  nom=:nom,mail=:mail,tel=:tel,permis=:permis, date=:date WHERE mail=:mail";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
       	$req=$db->prepare($sql);
            $nom=$Livreur->getnom();
	     	$mail=$Livreur->getemail();
	     	$date=$Livreur->getdate();
	     	$tel=$Livreur->gettel();
	     	$permis=$Livreur->getpermis(); 
		$datas = array(':nom'=>$nom, ':mail'=>$mail, ':tel'=>$tel,':permis'=>$permis,':date'=>$date);
	$req->bindValue(':nom',$nom);
	    	$req->bindValue(':mail', $mail);	
	      	$req->bindValue(':tel',$tel);
	    	$req->bindValue(':permis',$permis);
	     	$req->bindValue(':date',$date);



		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
          catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

}


function getmail($mail){
		$sql="SELECT * from livreur where mail=:mail";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}
	


class LivraisonC
{

function afficherLivraison(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivraison($code){
		$sql="DELETE FROM livraison where code= :code ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code',$code);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}
?>