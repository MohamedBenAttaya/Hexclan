<?php 
	require_once("C:/wamp64/www/projet/config.php");
	class admina
	{
		public function afficheradmin()
			{
				$sql="SELECT * FROM `admin`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>