


<?php include("include/header.php");?>


<body>
  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>veuillez remplir pour ajouter au stock</h3>

              </div>

<html>
   <head>
      <script type="text/javascript"> 
         function refresh(){
             var t = 1000; // rafraîchissement en millisecondes
             setTimeout('showDate()',t)
         }
         
         function showDate() {
             var date = new Date()
             var h = date.getHours();
             var m = date.getMinutes();
             var s = date.getSeconds();
             if( h < 10 ){ h = '0' + h; }
             if( m < 10 ){ m = '0' + m; }
             if( s < 10 ){ s = '0' + s; }
             var time = h + ':' + m + ':' + s
             document.getElementById('horloge').innerHTML = time;
             refresh();
          }
      </script>
   </head>
   <body onload=showDate();>
      <span id='horloge' style="background-color:#1C1C1C;color:silver;font-size:40px;"></span>
   </body>
</html>


              
                <div class="card-body">
<form name="formSaisie" method="POST" action="addProduit.php" enctype="multipart/form-data">
   

  
<div class="form-group">
        <label for="nom">Nom  : </label>
        <input id="nom" class="form-control form-control-user" placeholder="Veuillez saisir le nom" name="nom" required="true" "required="true" >
     </div>
     <div class="form-group">
        <label for="prix">Prix :<em>*</em></label>
        <input id="prix" type="text" class="form-control form-control-user" name="prix" placeholder="Veuillez saisir le prix" required="true" ><br>

      
      </div>


   
         <div class="form-group">
        <label   for="Description">DESCRIPTION</label>
    
        <textarea class="form-control form-control-user"   id="description" name="description" required="true"></textarea>
    </div>


<div class="form-group">
        <label   for="photo">Photo</label>
    <input type="file" name="photo" id="photo">
  </div>
  <!-- 
     <input type="hidden" class="form-control form-control-user" id="id_photo" name="id_photo" value="<?php echo '1'?>">
     -->
    

    <p id="s1">
        <button class="btn btn-primary" type="submit" name="action" onclick="valider();">Envoyer
        <!--<i class="material-icons right">send</i>-->
    </button></p>
   
</form>
  
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
              
                <!-- /panel -->
              </div>
              <!--/ col-md-4 -->
             
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
</body>

</html>
