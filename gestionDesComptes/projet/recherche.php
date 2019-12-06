<?PHP include "C:/wamp64/www/projet/core/clientC.php";
           
 if (isset($_POST['nom'])){          
$email= $_POST['email'];
$client1C=new clientC();
$listeclient=$client1C->rechercher($email);
header('Location: rcherclient.php');
}
?>