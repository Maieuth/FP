<?php
session_start();
include "connexion.php";


$email = trim($_POST['email']);
$mot_de_passe = htmlspecialchars($_POST['mdp']); 


$sql = "SELECT * FROM user WHERE email = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);
$user = $stmt->fetch();

if($user && $mot_de_passe === $user['mdp']) {
  
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];


    if ($user['email'] === 'admin@site.fr') {
        header("Location: modif.php");
    } else {
        header("Location: login.php");
    }
    exit();
} else {
    
    header("Location: login.php");
    exit();
}
?>
