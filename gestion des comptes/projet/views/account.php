<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="generator" content="Codeply" />
  <title>My account</title>
  <base target="_self"> 
<?php
      session_start();
      if (empty($_SESSION))
      {header("location:index.php");}
    ?>

            


  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="css/styles.css" />
</head>
<body >

                      <li class="container">
                        <a href="index.php" class="nav-link">Home page</a>
                      </li>

  <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">

<?php
$con = mysqli_connect("localhost","root","","projet");
$email = $_SESSION['email'];
$result=mysqli_query($con , "SELECT * FROM client WHERE email='$email'");
$retrive=mysqli_fetch_array($result);
//print_r($retrive);
$id=$retrive['id_client'];
$nom=$retrive['nom'];
$email=$retrive['email'];
$mdp=$retrive['mdp'];
$adresse=$retrive['adresse'];
?>

      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          You can <strong>EDIT</strong> your profile here.
        </div>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $nom ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Adress:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $adresse ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="email" value="<?php echo $email ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Actual Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
                    <div class="form-group">
            <label class="col-md-3 control-label">New Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src=""></script>

  <script src="js/scripts.js"></script>
</body>
</html>
