<?php 

if(
    isset($_POST['nom']) && !empty($_POST['nom'])
    &&
    isset($_POST['descrip']) && !empty($_POST['descrip'])
){
    $nom = htmlspecialchars($_POST['nom']);
    $descrip = htmlspecialchars($_POST['descrip']);
    $id = htmlspecialchars($_POST['id']);


    $reqsql= " UPDATE horreur SET nom='$nom' , descrip='$descrip' WHERE id=$id" ;
    include 'connexion.php';
    if($pdo->query($reqsql)){
        header('Location:modif.php'); 

    } else{
        header('Location:update_horreur.php');

    }

}else {
    header('Location:update_horreur.php');
}