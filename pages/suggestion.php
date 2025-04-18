<?php include "../inc/header.php"?>
<?php include "../inc/nav.php" ?>

<main>
    <div id="tcntct">
    <h2> Que voulez vous nous suggérer ?</h2>
    <br> <br>
</div>
    <form action="traitement.php" method="post">
        <input type="text" name="suggestion" maxlenght="2000">
        <input type="submit">
    </form>
    <br>
    <br>
    <br>
    <?php include "imageSwitch.php";

    afficherImageAvecSwitch("../img/retour.png","../img/retour2.png","contact.php");
    ?>
</main>
<aside>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, distinctio optio officiis soluta molestias natus ducimus dolore, in, maxime nesciunt laudantium saepe consequuntur debitis consequatur maiores cupiditate odio perspiciatis repellendus!</p>
</aside>

<?php include "../inc/footer.php"?>