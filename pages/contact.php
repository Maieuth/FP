<?php $title = "Contact • Le bazard du jeu" ?>
<?php include "../inc/header.php"?>
<?php include "../inc/nav.php" ?>





<main>

    <div id="tcntct"><h2>Nous contactez</h2></div>


    <div id ="maincontact">
    <?php include "imageSwitch.php";
    
    afficherImageAvecSwitch("../img/suggestion1.png","../img/suggestion2.png","suggestion.php");
    afficherImageAvecSwitch("../img/probleme1.png","../img/probleme2.png","probleme.php");
    ?>    
    </div>

</main>
<aside>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, distinctio optio officiis soluta molestias natus ducimus dolore, in, maxime nesciunt laudantium saepe consequuntur debitis consequatur maiores cupiditate odio perspiciatis repellendus!</p>
</aside>

<?php include "../inc/footer.php" ?>