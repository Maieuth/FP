<?php

include 'connexion.php';

if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
    $stmt = $pdo->prepare("SELECT * FROM simu WHERE nom = ?");
    $stmt->execute([$nom]);
    $jeu = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($jeu);
}
?>