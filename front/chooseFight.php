<?php
include('../config/connexion.php');
require('../class/Autoloader.php');

Autoloader::register();

require('../class/personnage.php');
require('../class/monster.php');



$userClass = $_POST['class'];
$userPseudo = $_POST['pseudo'];

$personnage = new Personnage($userPseudo, $userClass);
$archer = new Personnage('Bot archer', 'Archer');
$warrior = new Personnage('Bot warrior', 'Warrior');
$wizard = new Personnage('Bot wizard', 'Wizard');
$ogre = new Monster('Shrek', 'ogre');
$ogre->setMonsterDamage();
$ogre->setMonsterHp();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select an Opponent</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="select-fight">



    <div class="userCard">

        <?php
        if ($userClass === 'Warrior') {
            echo '<img src="../assets/warrior.gif" class="mini-sprite">';
        } else if ($userClass === 'Archer') {
            echo '<img src="../assets/archer.gif" class="mini-sprite">';
        } else if ($userClass === 'Wizard') {
            echo '<img src="../assets/wizard.gif" class="mini-sprite">';
        }
        ?>

        <p><?php echo $userPseudo ?></p>
        <p>Classe : <?php echo $personnage->getClass(); ?></p>
        <p>Point de vie : <?php echo $personnage->getHp(); ?></p>
        <p>Dégats : <?php echo $personnage->getDmg(); ?></p>
    </div>

    <div class="choose-opponent">
        <p>Choisis un adversaire</p>
    </div>

    <div class="ennemy">

        <div class="ennemy-card" id="monster-card">

            <?php

            if ($ogre->getMonsterType() === 'ogre') {
                echo '<img src="../assets/ogre.gif" class="mini-sprite">';
            } else if ($ogre->getMonsterType() === 'sorcier') {
                echo '<img src="../assets/mage.gif" class="mini-sprite">';
            } else if ($ogre->getMonsterType() === 'fantassin') {
                echo '<img src="../assets/soldat.gif" class="mini-sprite">';
            } ?>
            <p><?php echo $ogre->getMonsterName(); ?></p>
            <p>Point de vie : <?php echo $ogre->getMonsterHp(); ?></p>
            <p>Dégats : <?php echo $ogre->getMonsterDamage(); ?></p>
        </div>

        <div class="ennemy-card" id="archer-card">
            <img src="../assets/archer.gif" class="mini-sprite">
            <p><?php echo $archer->getName() ?></p>
            <p>Classe : <?php echo $archer->getClass(); ?></p>
            <p>Point de vie : <?php echo $archer->getHp(); ?></p>
            <p>Dégats : <?php echo $archer->getDmg(); ?></p>
        </div>

        <div class="ennemy-card" id="wizard-card">
            <img src="../assets/wizard.gif" class="mini-sprite">
            <p><?php echo $wizard->getName() ?></p>
            <p>Classe : <?php echo $wizard->getClass(); ?></p>
            <p>Point de vie : <?php echo $wizard->getHp(); ?></p>
            <p>Dégats : <?php echo $wizard->getDmg(); ?></p>
        </div>

        <div class="ennemy-card" id="warrior-card">
            <img src="../assets/warrior.gif" class="mini-sprite">
            <p><?php echo $warrior->getName(); ?></p>
            <p>Classe : <?php echo $warrior->getClass(); ?></p>
            <p>Point de vie : <?php echo $warrior->getHp(); ?></p>
            <p>Dégats : <?php echo $warrior->getDmg(); ?></p>
        </div>

    </div>

    <script>
        let monsterCard = document.getElementById('monster-card');


        monsterCard.addEventListener('click', () => {
            window.location.href = "http://localhost:90/TP-POO/front/fight.php?class=<?php echo $ogre->getMonsterType() ?>";
        })
    </script>

    <script src="./fight.js"></script>

</body>

</html>