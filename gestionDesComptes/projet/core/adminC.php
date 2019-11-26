<?php
require "C:/wamp64/www/projet/config.php";
include "C:/wamp64/www/projet/entities/admin.php";
class adminc
{

  function ajouter($admin)
  {

      $sql ="insert into admin (nom,mdp,email) values (:nom,:mdp,:email)" ;
      $db = config::getConnexion();
      $req = $db->prepare($sql);
      $email = $admin->getemail();
      $nom =$admin->getnom();
      $mdp =$admin->getmdp();
      $req->bindValue(':email',$email);
      $req->bindValue(':nom',$nom);
      $req->bindValue(':mdp',$mdp);

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
  function supprimeradmin($id){
  $sql="DELETE FROM admin where id=:id";
  $db = config::getConnexion();
      $req=$db->prepare($sql);
  $req->bindValue('id',$id);
  try{
          $req->execute();
          header('Location: table-admin.php');
      }
      catch (Exception $e){
          die('Erreur: '.$e->getMessage());
      }
  }
  function afficher()
  {
    $sql ="select * from admin" ;
    $db = config::getConnexion();
    try {
          $tab = $db->query($sql);
          return $tab;

    } catch (Exception $e) {
       echo 'Erreur :'.$e->getMessage();
    }


  }
  function modifieradmin($admin,$id,$mdpa){
		$sql="UPDATE admin SET email=:email,nom=:nom,mdp=:mdp  WHERE id=:id";

		$db = config::getConnexion();
try{
        $req=$db->prepare($sql);
		    $email=$admin->getemail();
        $nom=$admin->getnom();
       
        $mdp1=$admin->getmdp();
      
       if($mdp1 != ''){
          $mdp=$admin->getmdp();
       }
       else 
        $mdp=$mdpa;
        
        

	  	$req->bindValue(':id',$id);
		  $req->bindValue(':email',$email);
      $req->bindValue(':nom',$nom);
      
      $req->bindValue(':mdp',$mdp);
      
		


            $s=$req->execute();

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

}

 ?>