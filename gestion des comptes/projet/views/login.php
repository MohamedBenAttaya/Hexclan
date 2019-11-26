<?php
include "C:/wamp64/www/projet/core/clientC.php";
$host="localhost";
$user="root";
$password="";
$db="projet";

$con = mysqli_connect($host,$user,$password,$db);
if(isset($_POST['email'])){

    $sql="select * from client where email='".$_POST['email']."'AND mdp='".$_POST['mdp']."' limit 1";

    $result=mysqli_query($con,$sql);

    if(!$result || mysqli_num_rows($result) == 1)
    {
        session_start();
        $_SESSION['email']=$_POST['email'];
        $retrive=mysqli_fetch_array($result);
      
        $id=$retrive['id_client'];
        $_SESSION['nom']=$retrive['nom'];
       
        
        $mdp=$retrive['mdp'];
        $adresse=$retrive['adresse'];

        if (substr($_SESSION['email'],0,4) == 'info')
        {
          header("location:../nalika-master/nalika/index.php");
          exit();
        }else
        {
          header("location:index.html");
          exit();
        }

    }
    else{
        
	 
		echo ("<script LANGUAGE='JavaScript'>
         	       window.alert('You Have Entered An Incorrect Password');
                       window.location.href='login.html';
                       </script>");
          exit();
    }

   }
?>
