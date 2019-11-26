<?php include 'header.php' ; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Promotions</a>
        </li>
        <li class="breadcrumb-item active">listes des Promotions</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Liste des Promotions</div>
        <div class="card-body">
           
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>referance</th>
                  <th>nom</th>
                  <th>prix</th>
				  <th>code_barre</th>
                  <th>categorie</th>
				  <th>quantite</th>
				  <th>Modification</th>
                  <th>Supression</th>
                   
					

                </tr>
              </thead>
              
              <tbody>
              <?php
             include "../../entities/produit.php";
			 require '../../core/produitC.php';




			$prod=new ProduitC();
			$liste1=$prod->afficherUnProduit();
              foreach ($liste1 as $emp) {

              ?>
              <tr>
      <td><?php echo $emp['referance']; ?></td>
      <td><?php echo $emp['nom']; ?></td>
      <td><?php echo $emp['prix']; ?></td>
      <td><?php echo $emp['code_barre']; ?></td>
      <td><?php echo $emp['categorie']; ?></td>
	  <td><?php echo $emp['quantite']; ?></td>
	  <td><a href="modifierProduit.php?referance=<?PHP echo $emp['referance']; ?>">Modifier</a></td>
	  <td><a href="supprimerProduit.php?referance=<?PHP echo $emp['referance']; ?>">supprimer</a></td>

    </tr>
			 
                  <?php
              }
              ?>
              </tbody>

            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
	<?php include 'footer.php' ; ?>
    