<?php


if(isset($_POST['id']) && !empty($_POST['id']))
{
    include 'connexion.php';
    $id = htmlspecialchars($_POST['id']);
    $reponse =$pdo->query("SELECT * FROM solo WHERE id=$id");

    foreach($reponse AS $rep):




?>


<form action="modifier_solo.php" method="post">
    <input type="text" name="nom" maxlenght="150" value="<?= $rep['nom']?>"> <br>

    <input type="text" name="descrip" maxlenght="300" value="<?= $rep['descrip']?>"> <br>

    <input type="hidden" name='id' value='<?=$rep['id']?>'>

    <input type="submit" value="modifier">
</form>

<?php endforeach; } ?>