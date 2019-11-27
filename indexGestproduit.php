
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
   
<?php include "include/header.php";
      include "Core/produitCore.php";
      include "Core/photoCore.php";

      


  



//var_dump($listMenus->fetchAll());
?>

   
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Liste menu </h3>
           

    

          <!-- Page Heading -->

          <!-- DataTales Example -->
        
            <div class="card-header py-3">

                  <a href="form.php" >+ Ajouter produit</a>
                


            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-dark" id="dataTable" width="100%" cellspacing="0">
                  <thead align="center">
                    <tr>
                       <tr>
                        <th>Photo</th>
                      <th>Nom</th>
            <th>Prix</th>
            <th>Description</th>
            <th colspan="3">ACTIONS</tH>
            
                    </tr>
                    </tr>
                  </thead>
              
                   <tbody>
             <?PHP
             $produitCoreInstance=new produitCore();
$listProduits = $produitCoreInstance->afficherListProduits();
                   foreach($listProduits as $row){
                    $photoCoreInstance=new photoCore();
                  //  $nature= $row['nom'];
                   // $listPhotos = $photoCoreInstance->afficherlistPhotosParCat($nature)
  ?>
  <tr>
        <td><img src="http://localhost/projet/<?PHP echo $row['photo']; ?>" style="height: 70px;"></td>
        <td>
            <?PHP echo $row['nom']; ?>

         </td>
        <td>
             <?PHP echo $row['prix']; ?>
        </td>
        
        <td>
            <?PHP echo $row['description']; 
        
      ?>
      
        
        </td>
       

        <td>
            <form method="POST" action="deleteProduit.php">
                <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                <input type="submit" id="delete" name="supprimer" class="btn delicious-btn"' value="" style="background-image: url('img/delete.png') ; background-repeat: no-repeat;  background-size: 29px;  height: 32; width: 32;">
            </form>
        </td>
       

        <td>
              <button style=" background: transparent;
    border: none !important;
    font-size:0;">
              <a name="modifier" class="btn delicious-btn" href="ModifProduit.php?id=<?PHP echo $row['id']; ?>"  value="" style="background-image: url('img/edit.png') ; background-repeat: no-repeat;  background-size: 32px; height: 45; width: 45;">

              </a>
            </button> 
        </td>
       



  </tr>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</section>
  <?PHP
}
?>
<?php include "include/footer.php";?>
   
  <!-- js placed at the end of the document so the pages load faster -->
 
