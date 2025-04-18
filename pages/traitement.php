<?php

if(
    isset($_POST['probleme']) && !empty($_POST['probleme'])
){
    $pb = htmlspecialchars($_POST['probleme']);

    $reqsql =" INSERT INTO contact (probleme) VALUES ('$pb')";
    include 'connexion.php';
    if($pdo ->query($reqsql)){
        header('Location:contact.php');        
    }

}else if(
    isset($_POST['suggestion']) && !empty($_POST['suggestion'])
){
    $sg = htmlspecialchars($_POST['suggestion']);

    $reqsql =" INSERT INTO contact (suggestion) VALUES ('$sg')";
    include 'connexion.php';
    if($pdo ->query($reqsql)){
        header('Location:contact.php');        
    }

}else{
    header('Location:contact.php');
}