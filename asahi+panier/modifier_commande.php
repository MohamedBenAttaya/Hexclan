<?PHP
	//include "cart.php";
	$database_name = "Projet";
    $con = mysqli_connect("localhost","root","",$database_name);
	mysqli_select_db($con,$database_name);
	/*$query = "UPDATE product SET Quantity='$_GET[Quantity]' WHERE id='$_GET[id]'";
	if(mysqli_query($con,$query))
		header("refresh:1; url=cart.php");
	else
		echo"Not updated";*/
?>
<?PHP
if (isset($_POST['modifier'])){
$query="UPDATE product SET Quantity='$_POST[Quantity]' WHERE id='$_POST[id]'";
if(mysqli_query($con,$query))
header("refresh:1; url=cart.php");
else
echo"Not updated";
}
?>