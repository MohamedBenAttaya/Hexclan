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
        $photo   = $row['photo'];
?>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Modifier produit</h3>

             <img src="http://localhost/projet/<?PHP echo $row['photo']; ?>" style="display: block; height: 220px; margin-right: auto; margin-left: auto;">

  <form name= "formModif" method="POST" enctype="multipart/form-data">
    
    
            <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
            <div class="form-group">
        <label for="nom">Nom  : </label>
        <input id="nom" class="form-control form-control-user" value="<?PHP echo $nom ?>" name="nom" required >
     </div>
     <div class="form-group">
        <label for="prix">Prix :<em>*</em></label>
        <input id="prix" type="text" class="form-control form-control-user"value="<?PHP echo $prix ?>" name="prix" required ><br>

      

      </div>


   
         <div class="form-group">
        <label   for="Description">DESCRIPTION</label>
    
        <textarea class="form-control form-control-user"   id="description" value="" name="description" required><?PHP echo $description ?></textarea>
    </div>

    <div class="form-group">
        <label   for="photo">Photo</label>
    <input type="file" name="photo" id="photo">
  </div>
       
        </tr>
         
    
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
$target_file = $_FILES["photo"];
$produitInstance =new produit($_POST['nom'],$_POST['prix'],$_POST['description'],$photo);
$produitCoreInstance->modifierProduit($produitInstance,$_POST['id_ini'],$target_file);
	     //echo $_POST['id_ini'];
	    
echo'<script>window.location.href = "indexGestproduit.php";</script>';
//exit();	   
	   
}?>
</body>
<?php include("./include/footer.php");?>
</HTMl>






