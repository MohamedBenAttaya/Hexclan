<?php
require_once ("C:/wamp64/www/projet/core/clientC.php");
if(isset($_POST["supprimer"]))
{
$clientC=new clientC();
$clientC->supprimerclient($_POST["id_client"]);
}
require_once("ajouterclient.php")
?>
