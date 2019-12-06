<?php
include "C:/wamp64/www/projet/core/clientC.php";
include_once $_SERVER['DOCUMENT_ROOT'] . '/projet/securimage/securimage.php';
$host="localhost";
$user="root";
$password="";
$db="projet";


$con = mysqli_connect($host,$user,$password,$db);
if(isset($_POST['email'])){

    $sql="select * from client where email='".$_POST['email']."'AND mdp='".$_POST['mdp']."' limit 1";

    $result=mysqli_query($con,$sql);
    $securimage = new Securimage();

    if(!$result || mysqli_num_rows($result) == 1)
    {
        if ($securimage->check($_POST['captcha_code']) == false) {
        echo ("<script LANGUAGE='JavaScript'>
                    window.alert('You Have Entered An Incorrect Captcha');
                       window.location.href='log-in.html';
                       </script>");
        exit;
        }

        else {
        session_start();
        $_SESSION['email']=$_POST['email'];
        $retrive=mysqli_fetch_array($result);
      
        $id=$retrive['id_client'];
        $_SESSION['nom']=$retrive['nom'];
       
        
        $mdp=$retrive['mdp'];
        $adresse=$retrive['adresse'];


        
          header("location:index.php");
          exit();
        }

    }
    else{
        
	 
		echo ("<script LANGUAGE='JavaScript'>
         	       window.alert('You Have Entered An Incorrect Password');
                       window.location.href='log-in.html';
                       </script>");
          exit();
    }

   }
?>
