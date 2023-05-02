<?php

include("./connexion.php");


if (!empty($_POST['pseudo'])) {
    $pseudo = $_POST['pseudo'];
    $sqlAddUser = "INSERT INTO user (id, pseudo) VALUES (id, '$pseudo')";
    $user = $pdo->exec($sqlAddUser);
    header("Location: ../front/chooseFight.php");
} else {
    header("Location: ../front/index.php");
}
