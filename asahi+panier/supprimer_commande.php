<?PHP
//include "cart.php";
	$database_name = "Projet";
    $con = mysqli_connect("localhost","root","",$database_name);
	mysqli_select_db($con,$database_name);
	$query = "DELETE FROM product WHERE id='$_GET[id]'";
	if(mysqli_query($con,$query))
		header("refresh:1; url=cart.php");
	else
		echo"Not Deleted";


?>