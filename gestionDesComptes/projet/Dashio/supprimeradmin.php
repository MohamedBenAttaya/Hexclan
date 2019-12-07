<?php
require_once ("C:/wamp64/www/projet/core/adminC.php");
if(isset($_POST["supprimer"]))
{
$adminC=new adminC();
$adminC->supprimeradmin($_POST["id"]);
}
require_once("ajouteradmin.php")
?>
