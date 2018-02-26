<?php
include 'produit.php';

if(isset($_POST['Go'])){
  if(isset($_POST['url'])){

     //on verifie que ce n'est pas vide

    if(!empty($_POST['url'])){
        // on verifie que le mail est viable
                    //on verifie que le mail n'existe pas et on inscrit
      if(verif_url_exists() == 0){

       inserer_produit();
       $id = $pdo->lastinsertid();

        //var_dump($_REQUEST['label']);
       if (empty($_REQUEST['critere'])&&empty($_REQUEST['label'])) {

        
        echo "Merci pour votre participation";
        header("refresh:3; url= index.php");

      }else if (empty($_REQUEST['label'])) {
       
        inserer_critere($id, $_REQUEST['critere']);

        echo "Merci pour votre participation";
        header("refresh:3; url= index.php");

      }else if (empty($_REQUEST['critere'])) {
        
        inserer_label($id, $_REQUEST['label']);


        echo "Merci pour votre participation";
        header("refresh:3; url= index.php");

      }else{

        inserer_label($id, $_REQUEST['label']);

        inserer_critere($id, $_REQUEST['critere']);

        echo "Merci pour votre participation";
        header("refresh:3; url= index.php");
      }


    } else {
     echo "Cette url existe déjà";
     /*Idée est de mener direct sur la page du produit existant*/
     header("refresh:3; url= index.php");
   }


 }else {
   echo "Vous devez remplir tout les champs vides.";
   header("refresh:3; url= index.php");
 }

}
}