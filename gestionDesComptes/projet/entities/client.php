<?php

class client
{
  private $id_client;
  private $nom;
  private $email;
  private $mdp;
  private $adresse;

  function __construct($nom,$email,$mdp,$adresse)
  {
       
    $this->nom = $nom;
    $this->email = $email;
    $this->mdp = $mdp;
    $this->adresse = $adresse;
  }
  

  function getid_client (){ return $this->id_client;}	
  function getnom (){return $this->nom;}
  function getemail (){ return $this->email;}  
  function getmdp (){return $this->mdp;}
  function getadresse (){ return $this->adresse;}
	
	


}
?>