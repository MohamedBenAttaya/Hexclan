<?PHP
include "../../entities/produit.php";
include "../../core/produitC.php";

if (isset($_GET['referance'])){
	$produitC=new produitC();
    $result=$produitC->recupererproduit($_GET['referance']);
	foreach($result as $row){
		$referance=$row['referance'];
		$nom=$row['nom'];
		$prix=$row['prix'];
		$code_barre=$row['code_barre'];
		$categorie=$row['categorie'];
		$quantite=$row['quantite'];
			}
}
if (isset($_POST['modifier']))
{
	
	$produit=new produit($_POST['referance'],$_POST['nom'],$_POST['prix'],$_POST['code_barre'],$_POST['categorie'],$_POST['quantite'],$row['img']);
	$produitC->modifierproduit($produit);
	header('Location: afficherproduit.php');
}
include "header.php"; 
?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">produits</a>
        </li>
        <li class="breadcrumb-item active">Modifier produit</li>
      </ol>
      <!-- Example DataTables Card-->
	  <div class="card card-register mx-auto mt-5">
      <div class="card-header">Modifier produit</div>
      <div class="card-body">
        <form method="POST" >
          <div class="form-group">
            <div class="form-row">
              
                <label for="exampleInputName">referance</label>
                <input class="form-control" name="referance" type="number" aria-describedby="nameHelp"  pattern="[0-9]{8}" title="Ce champ doit avoir 8 chiffres ."  value="<?PHP echo $referance ?>" required>
              
			  </div>
			  <div class="form-row">
              
                <label for="exampleInputLastName">nom</label>
                <input class="form-control" name="nom"  type="text" aria-describedby="nameHelp"  value="<?PHP echo $nom ?>" pattern="[A-Za-z]{4,}" title="Ce champ doit avoir au moins 4 Characthéres ." required>
              
            </div>
          </div>
          <div class="form-group">
		  
            <label for="exampleInputEmail1">prix</label>
            <input class="form-control" name="prix" type="number" aria-describedby="emailHelp" value="<?PHP echo $prix ?>" min=1 max=20 title="le prix doit etre entre 1 et 20 Dt ." required>
          </div>
          <div class="form-group">
            <div class="form-row">
              
                <label for="exampleInputPassword1">Code a Barre</label>
                <input class="form-control" name="code_barre" type="number"  value="<?PHP echo $code_barre ?>" pattern="[0-9]{8}" title="Ce champ doit avoir 8 chiffres ." required>
              
			  </div>
			  <div class="form-row">
              
                <label for="exampleConfirmPassword">Description</label>
                <input class="form-control" name="categorie" type="text" value="<?PHP echo $categorie ?>"  pattern="[A-Za-z]{4,}" title="Ce champ doit avoir au moins 4 Characthéres ." required>
              </div>
			  <div class="form-row">
              
                <label for="exampleConfirmPassword">Quantite</label>
                <input class="form-control" name="quantite" type="number" placeholder="" value="<?PHP echo $quantite ?>" min=1 max=100 title="la quantite doit etre entre 1 et 100 ." required >
              </div>
			  
            </div>
          </div>
          <input class="form-control" type="submit" name="modifier" value="modifier">
		  <input type="hidden" name="referance_ini" value="<?PHP echo $_GET['referance'];?>"></td>


        </form>
       
      </div>
    </div>
      
    </div>

	<?php include 'footer.php' ; ?>
    