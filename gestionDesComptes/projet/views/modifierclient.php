<?PHP
include "C:/wamp64/www/LSM/core/clientC.php";


	$client1=new client($_POST['nom'],$_POST['email'],$_POST['mdp'],$_POST['adresse']);
	$client1C=new clientC();
	$client1C->modifierclient($client1,$_POST['id_client'],$_POST['pwd_client']);
	header('location:myAccount.php');
?>
