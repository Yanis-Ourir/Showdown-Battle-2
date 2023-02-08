<?php
include("../config/connexion.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Showdown Battle</title>
</head>

<body>

    <form action="../config/newUser.php" method="post">

        <div class="choose-class">
            <img class="sprite" src="../assets/archer.gif">
            <img class="sprite-vivi" src="../assets/wizard.gif">
            <img class="sprite" src="../assets/warrior.gif">
        </div>


        <div class="form-class">
            <label>Entrer votre pseudo</label>
            <input type="" name="pseudo">
        </div>


        <div class="btn-submit">
            <input type="submit">
        </div>
    </form>
</body>

</html>