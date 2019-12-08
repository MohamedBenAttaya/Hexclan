<?PHP

include "/Entities/produit.php";
include "/Core/produitCore.php";


if (isset($_POST['nom'])  and
    isset($_POST['description'])  and
    isset($_POST['prix'])) 
 
    {
    	
    	
$target_file = $_FILES["photo"];
$produitInstance =new Produit($_POST['nom'],$_POST['prix'],$_POST['description'] , null);

$produitCoreInstance=new produitCore();
$produitCoreInstance->ajouterProduit($produitInstance , $target_file);


echo'<script>window.location.href = "indexGestproduit.php";</script>';


	
}else{
	echo "vérifier les champs";
}

//*/
