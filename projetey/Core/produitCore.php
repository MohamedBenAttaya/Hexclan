<?PHP

include("config.php");

class produitCore {




    function ajouterProduit($produit , $file){

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($file["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($file["tmp_name"], $target_file);

        $sql="insert into produit (nom,prix,description,photo)
        values (:nom,:prix,:description,:photo)";

       
        $db = config::getConnexion();

        try{

        $req=$db->prepare($sql);

        $id=$produit->getId();
        $nom=$produit->getNom();
        $description=$produit->getDescription();
        $photo=$produit->getPhoto();
        $prix=$produit->getPrix();
         

        

        $req->bindValue(':nom',$nom);
        $req->bindValue(':description',$description);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':photo',$target_file);
  
       

        $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function afficherListProduits(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From produit";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   /* function afficherListSites($idc){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $p=(int)$idc;
        $sql="SElECT * From site  where id_user=$p";
        $db = new PDO('mysql:host=localhost;dbname=project_db', 'root', '');
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function afficherlistTypeParCat($type){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From photo where type ='".$type."'";

        $db = config2::getConnexion();
        try{

            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
     */
     function recupererProduit($id){
        $sql="SELECT * from produit where id=$id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function supprimerProduit($id){

        $sql="DELETE FROM produit where id= :id";

        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
     function modifierProduit($produit,$id,$file){


        if($file['name'] != "" ){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($file["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($file["tmp_name"], $target_file);
        }
        $sql="UPDATE produit SET nom=:nom,prix=:prix,photo=:photo,description=:description WHERE id=:id";

    $db = config::getConnexion();
        
       //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
                $req=$db->prepare($sql);

                
                $nom=$produit->getNom();
                $description=$produit->getDescription();
                 $prix=$produit->getPrix();
                $photo=$produit->getPhoto();

                /*

                $datas = array(':id'=>$id,':nom'=>$nom, ':prix'=>$prix, ':photo'=>$photo,':description'=>$description);
                var_dump($datas);
                */

        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prix',$prix);
        if($file['name'] != "" ){
            $req->bindValue(':photo',$target_file);
        }else{
            $req->bindValue(':photo',$photo);
        }
            
            $req->bindValue(':description',$description);
        


                $s= $req->execute();

                   // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }

    }
     function afficherlistProduitParCat($id){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From tacos where id ='".$id." ";

        $db =new PDO('mysql:host=localhost;dbname=tacos', 'root', '');
        try{

            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
     
  

   /*
    function afficherListProgs(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT id,name,type,price,duree,calories,img,description,id_menu From programme";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerProg($id){

        $sql="DELETE FROM programme where id= :id";

        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierProg($prog,$id){

        $sql="UPDATE programme SET name=:name,type=:type,price=:price,duree=:duree,calories=:calories,img=:img,description=:description,id_menu=:id_menu WHERE id=:id";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
                $req=$db->prepare($sql);

                $name=$prog->getName();
                $type=$prog->getType();
                $price=$prog->getPrice();
                $duree=$prog->getDuree();
                $img=$prog->getImg();
                $calories=$prog->getCalories();
                $description=$prog->getDescription();
                $id_menu=$prog->getIdMenu();

                $datas = array(':id'=>$id,':name'=>$name, ':type'=>$type, ':price'=>$price,':duree'=>$duree,':calories'=>$calories,':img'=>$img,':description'=>$description,':id_menu'=>$id_menu);

                $req->bindValue(':name',$name);
                $req->bindValue(':id',$id);
                $req->bindValue(':type',$type);
                $req->bindValue(':price',$price);
                $req->bindValue(':duree',$duree);

                $req->bindValue(':calories',$calories);
                $req->bindValue(':img',$img);
                $req->bindValue(':description',$description);
                $req->bindValue(':id_menu',$id_menu);


                $s= $req->execute();

                   // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
    }


    function recupererProg($id){
        $sql="SELECT * from programme where id=$id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function rechercherListeEmployes($tarif){
        $sql="SELECT * from employe where tarifHoraire=$tarif";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
*/
}

?>