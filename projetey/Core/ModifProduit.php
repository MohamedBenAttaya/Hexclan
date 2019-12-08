<body>
    

<?PHP
include("include/header.php");
      
include ("./Entities/produit.php");
include ("./Core/produitCore.php");


if (isset($_GET['id'])){
    $produitCoreInstance = new produitCore();
    
    $listProduits = $produitCoreInstance->afficherListProduits();

    $result= $produitCoreInstance->recupererProduit($_GET['id']);
	foreach($result as $row){
		$nom          = $row['nom'];
		$prix   = $row['prix'];
		$description   = $row['description'];
        $id_photo   = $row['id_photo'];
?>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Liste des produits</h3>

  <form name= "formModif" method="POST">
    
    
            <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
            <div class="form-group">
        <label for="nom">Nom  : </label>
        <input id="nom" class="form-control form-control-user" value="<?PHP echo $nom ?>" name="nom"  >
     </div>
     <div class="form-group">
        <label for="prix">Prix :<em>*</em></label>
        <input id="prix" type="text" class="form-control form-control-user"value="<?PHP echo $prix ?>" name="prix" ><br>

      

      </div>


   
         <div class="form-group">
        <label   for="Description">DESCRIPTION</label>
    
        <textarea class="form-control form-control-user"   id="description" value="<?PHP echo $description ?>" name="description"></textarea>
    </div>
       
        </tr>
         <input type="hidden" class="form-control form-control-user" id="id_photo" name="id_photo" value="<?php echo '1'?>">
    
            <button class="btn waves-effect waves-light" type="submit" name="modifier" value="modifier">Modifier
        <!--<i class="material-icons right">send</i>-->
    </button></p>
    
    <td></td>
            <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
    </table>

 </form>
<?PHP
	}
}

if (isset($_POST['modifier'])){
$produitInstance =new produit($_POST['nom'],$_POST['prix'],$_POST['description'],$_POST['id_photo']);
$produitCoreInstance->modifierProduit($produitInstance,$_POST['id_ini']);
	     //echo $_POST['id_ini'];
	    
echo'<script>window.location.href = "indexGestproduit.php";</script>';
//exit();	   
	   
}?>
</body>
<?php include("./include/footer.php");?>
</HTMl>





