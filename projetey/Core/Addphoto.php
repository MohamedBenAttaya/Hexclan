<?PHP
include("./include/header.php");
include "./Entities/photo.php";
include "./core/photoCore.php";


if (isset($_POST['id_photo']) and
    isset($_POST['dateT']))
    {
    	if($_FILES){
     $file = $_FILES['image'];
     $image_size =getimagesize($_FILES['image']);

   if(isset($file) && ($image_size != FALSE))
        {
             $image = addslashes(file_get_contents($_FILES['image']));
             $image_name =addslashes($_FILES['image']);
             $image= base64_encode($image);

             file_put_contents('./uploads/'.$image_name,file_get_contents($_FILES['image']);
        }   
}

$photoInstance =new photo($image_name,$_POST['id_photo']);

$photoCoreInstance=new PhotoCore();
$photoCoreInstance->ajouterPhoto($photoInstance);
echo'<script>window.location.href = "../indexGestproduit.php";</script>';




	
}else{
	echo "vérifier les champs";
}

//*/

?>
<?php include("../include/footer.php");?>