<?php

class admin
{
  private $id;
  private $nom;
  private $email;
  private $mdp;

  function __construct($nom,$email,$mdp)
  {
       
    $this->nom = $nom;
    $this->email = $email;
    $this->mdp = $mdp;
  }
  

  function getid (){ return $this->id;}	
  function getnom (){return $this->nom;}
  function getemail (){ return $this->email;}  
  function getmdp (){return $this->mdp;}
	
	


}
?>