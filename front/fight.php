<?php include("../config/connexion.php");
require('../class/monster.php');
require('../class/personnage.php');

$classMonster = $_GET['class'];
$ennemy = new Monster($classMonster, $classMonster);
$ennemy->setMonsterDamage();
$ennemy->setMonsterHp();


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Start a fight</title>
</head>

<body class="Fighting-club">

    <div class="versus">
        <div class="player">
            <img src="../assets/archer.gif" class="mini-sprite-fight">
        </div>

        <div class="opponnent">
            <?php

            if ($ennemy->getMonsterType() === 'ogre') {
                echo '<img src="../assets/ogre.gif" class="mini-sprite-fight">';
            } else if ($ennemy->getMonsterType() === 'sorcier') {
                echo '<img src="../assets/mage.gif" class="mini-sprite-fight">';
            } else if ($ennemy->getMonsterType() === 'fantassin') {
                echo '<img src="../assets/soldat.gif" class="mini-sprite-fight">';
            } ?>
        </div>

    </div>

    <div class="menu">
        <div class="action">
            <p>Attaque</p>
            <p>Compétence</p>
            <p>Garde</p>
            <p>Fuir</p>
        </div>

        <div class="group">
            <p>Nom du joueur</p>
        </div>

        <div class="cible">
            <p><?php echo $ennemy->getMonsterName() ?> <?php echo $ennemy->getMonsterHp() ?> / <?php echo $ennemy->getMonsterHp() ?></p>
        </div>

    </div>
</body>

</html>