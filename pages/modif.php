<?php $title = "Modification • Le bazard du jeu" ?>
<?php include "../inc/header.php"?>
<?php include "../inc/nav.php" ?>


<main id="mo">
    <table summary="table des fps">
         <caption>FPS</caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
            </tr>
        </thread>
        <tbody>
            <?php
            include 'connexion.php';
            $sql1 = "SELECT * FROM fps";
            $infos1=$pdo->query($sql1);
            foreach($infos1 AS $i):
            ?>
            <tr>
                <td><?= strtoupper($i['nom']) ?></td>
                <td><?= strtoupper($i['descrip']) ?></td>
            <td>
            <form action= "update_fps.php" method="post">                 
                        <input type="hidden" name="id" value="<?= $i['id']?>">
                        <input type="image" src="<?=BASE?>img/edit.png" alt="logo d'édition" height="25">
                    </form>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>

    <table summary="table des solo">
         <caption>SOLO</caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
            </tr>
        </thread>
        <tbody>
            <?php
            $sql2 = "SELECT * FROM solo";
            $infos2=$pdo->query($sql2);
            foreach($infos2 AS $k):
            ?>
            <tr>
                <td><?= strtoupper($k['nom']) ?></td>
                <td><?= strtoupper($k['descrip']) ?></td>
            <td>
            <form action= "update_solo.php" method="post">                 
                        <input type="hidden" name="id" value="<?= $k['id']?>">
                        <input type="image" src="<?=BASE?>img/edit.png" alt="logo d'édition" height="25">
                    </form>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>

    <table summary="table des simu">
         <caption>SIMU</caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
            </tr>
        </thread>
        <tbody>
            <?php

            $sql3 = "SELECT * FROM simu";
            $infos3=$pdo->query($sql3);
            foreach($infos3 AS $j):
            ?>
            <tr>
                <td><?= strtoupper($j['nom']) ?></td>
                <td><?= strtoupper($j['descrip']) ?></td>
            <td>
            <form action= "update_simu.php" method="post">                 
                        <input type="hidden" name="id" value="<?= $j['id']?>">
                        <input type="image" src="<?=BASE?>img/edit.png" alt="logo d'édition" height="25">
                    </form>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>

    <table summary="table des horreur">
         <caption>HORREUR</caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
            </tr>
        </thread>
        <tbody>
            <?php

            $sql4 = "SELECT * FROM horreur";
            $infos4=$pdo->query($sql4);
            foreach($infos4 AS $m):
            ?>
            <tr>
                <td><?= strtoupper($m['nom']) ?></td>
                <td><?= strtoupper($m['descrip']) ?></td>
            <td>
            <form action= "update_horreur.php" method="post">                 
                        <input type="hidden" name="id" value="<?= $m['id']?>">
                        <input type="image" src="<?=BASE?>img/edit.png" alt="logo d'édition" height="25">
                    </form>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>

    <table summary="table des reco">
         <caption>RECO</caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
            </tr>
        </thread>
        <tbody>
            <?php
  
            $sql5 = "SELECT * FROM reco";
            $infos5=$pdo->query($sql5);
            foreach($infos5 AS $l):
            ?>
            <tr>
                <td><?= strtoupper($l['nom']) ?></td>
                <td><?= strtoupper($l['descrip']) ?></td>
            <td>
            <form action= "update_reco.php" method="post">                 
                        <input type="hidden" name="id" value="<?= $l['id']?>">
                        <input type="image" src="<?=BASE?>img/edit.png" alt="logo d'édition" height="25">
                    </form>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>




</main>
<?php include '../inc/footer.php';