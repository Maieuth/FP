<?php $title = "Connexion • Le bazard du jeu" ?>
<?php include "../inc/header.php" ?>
<?php include "../inc/nav.php" ?>

<main>
<div id="clogin">
<form action="verif_login.php" method="POST">
    <label>Email :</label>
    <input type="email" name="email" required><br>

    <label>Mot de passe :</label>
    <input type="password" name="mdp" required><br>

    <input type="submit" value="Se connecter">
</form>
</div>
</main>

<?php include "../inc/footer.php"?>