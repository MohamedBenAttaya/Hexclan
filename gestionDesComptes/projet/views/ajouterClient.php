<?PHP
include "C:/wamp64/www/projet/core/clientC.php";

if (isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['adresse']) and isset($_POST['mdp2']) ) {
$client1=new client($_POST['nom'],$_POST['email'],$_POST['mdp'],$_POST['adresse']);
$client1C=new clientC();
$client1C->ajouter($client1);
header('Location: log-in.html');
}

?>
