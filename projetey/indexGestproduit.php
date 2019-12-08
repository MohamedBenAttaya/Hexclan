
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
              <h3>Notre stock </h3>
           

    

          <!-- Page Heading -->

          <!-- DataTales Example -->
        
            <div class="card-header py-3">

                  <a href="form.php" >+ Ajouter au stock</a>
                <td>
         
          <table class="table table-striped b-t b-light">
                <form method="POST">
                    <input type="text" id="arearech" name="search" placeholder="Taper pour rechercher ... " required>
                    <input type="submit" value="Rechercher"  class="btn btn-primary">
                </form>
       </td>


            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-dark" id="dataTable" width="100%" cellspacing="0">
                  <thead align="center">
                    <tr>
                       <tr>
                        <th>Photo</th>
                      <th>Nom</th>
            <th>prix</th>
            <th>Disponibilité</th>
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
<html> 
   <head> 
      <script> 
         //fonction qui évalue le chiffre et renvoie la sortie
         function calculer() 
         { 
             let a = document.getElementById("output").value 
             let b = eval(a) 
             document.getElementById("output").value = b 
         } 
         //fonction qui affiche la valeur
         function afficher(val) 
         { 
             document.getElementById("output").value+=val 
         } 
         //fonction qui efface l'écran 
         function effacer() 
         { 
             document.getElementById("output").value = "" 
         } 
      </script>
      <style>
        td button{width:100%}
      </style>
   </head> 
   <body> 
      <table border="1"> 
         <tr> 
            <td colspan="3"><input id="output"/></td> 
            <td><button onclick="effacer()">c</button></td> 
         </tr> 
         <tr> 
            <td><button onclick="afficher('1')">1</button></td> 
            <td><button onclick="afficher('2')">2</button></td> 
            <td><button onclick="afficher('3')">3</button></td> 
            <td><button onclick="afficher('+')">+</button></td> 
         </tr> 
         <tr> 
            <td><button onclick="afficher('4')">4</button></td> 
            <td><button onclick="afficher('5')">5</button></td> 
            <td><button onclick="afficher('6')">6</button></td> 
            <td><button onclick="afficher('-')">-</button></td> 
         </tr> 
         <tr> 
            <td><button onclick="afficher('7')">7</button></td> 
            <td><button onclick="afficher('8')">8</button></td> 
            <td><button onclick="afficher('9')">9</button></td> 
            <td><button onclick="afficher('*')">*</button></td> 
         </tr> 
         <tr>
            <td><button onclick="afficher('.')">.</button></td> 
            <td><button onclick="afficher('0')">0</button></td> 
            <td><button onclick="calculer()">=</button></td> 
            <td><button onclick="afficher('/')">/</button></td> 
         </tr> 
      </table> 
   </body> 
</html>
<?php include "include/footer.php";?>
   
  <!-- js placed at the end of the document so the pages load faster -->
 
