<?php define('BASE','/Projet_Final/');?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>
         <?php
         if(isset($title)){
            echo $title;
         }  else {
            echo 'Le bazard du jeu';
         }
         ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE?>css/style.css">
    <link rel="stylesheet" href="<?= BASE?>css/mobile.css">
    <title>Accueil</title>
</head>
<body>
 
<header>
    
<a href="<?=BASE?>index.php"><img src="<?=BASE?>img/logo.jpg" alt="logo du site"></a>

<h1> LE BAZAR DU JEU VIDEO </h1>

<a href="<?=BASE?>pages/login.php"><img src="<?=BASE?>img/loser.png" alt="logo de la partie utilisateur" id="userl"></a>


</header>