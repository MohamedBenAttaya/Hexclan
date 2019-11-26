<?php
require "C:/wamp64/www/projet/config.php";
include "C:/wamp64/www/projet/entities/client.php";
class clientc
{

  function ajouter($client)
  {

      $sql ="insert into client (nom,mdp,email,adresse) values (:nom,:mdp,:email,:adresse)" ;
      $db = config::getConnexion();
      $req = $db->prepare($sql);
      $email = $client->getemail();
      $nom =$client->getnom();
      $mdp =$client->getmdp();
      $adresse =$client->getadresse();
      $req->bindValue(':email',$email);
      $req->bindValue(':nom',$nom);
      $req->bindValue(':mdp',$mdp);
      $req->bindValue(':adresse',$adresse);

try {
      $req->execute();
      return true;
    }
    catch (Exception $e)
    {
      echo 'Erreur :'.$e->getMessage() ;
      return false ;
    }
  }
  function supprimerclient($id){
  $sql="DELETE FROM client where id_client=:id";
  $db = config::getConnexion();
      $req=$db->prepare($sql);
  $req->bindValue('id',$id);
  try{
          $req->execute();
          header('Location: table-client.php');
      }
      catch (Exception $e){
          die('Erreur: '.$e->getMessage());
      }
  }
  function afficher()
  {
    $sql ="select * from client" ;
    $db = config::getConnexion();
    try {
          $tab = $db->query($sql);
          return $tab;

    } catch (Exception $e) {
       echo 'Erreur :'.$e->getMessage();
    }


  }
  function modifierclient($client,$id,$mdpa){
		$sql="UPDATE client SET email=:email,nom=:nom,mdp=:mdp,adresse=:adresse  WHERE id_client=:id";

		$db = config::getConnexion();
try{
        $req=$db->prepare($sql);
		    $email=$client->getemail();
        $nom=$client->getnom();
       
        $mdp1=$client->getmdp();
      
       if($mdp1 != ''){
          $mdp=$client->getmdp();
       }
       else 
        $mdp=$mdpa;
        
        
      $adresse=$client->getadresse();

	  	$req->bindValue(':id',$id);
		  $req->bindValue(':email',$email);
      $req->bindValue(':nom',$nom);
      
      $req->bindValue(':mdp',$mdp);
      
		
		  $req->bindValue(':adresse',$adresse);


            $s=$req->execute();

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

}

 ?>