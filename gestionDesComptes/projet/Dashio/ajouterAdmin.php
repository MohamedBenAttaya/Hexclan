<?PHP
include "C:/wamp64/www/projet/core/adminC.php";

if (isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['mdp']) ) {
$admin1=new admin($_POST['nom'],$_POST['email'],$_POST['mdp']);
$admin1C=new adminC();
$admin1C->ajouter($admin1);
header('Location: table-admin.php');
}

?>
