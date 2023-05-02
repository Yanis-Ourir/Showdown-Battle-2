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

<body class="index">

    <form action="./chooseFight.php" method="post">

        <div class="showClass" id="showClass">

        </div>

        <div class="choose-class">


            <select name="class" id="class">
                <option value="Warrior">Guerrier</option>
                <option value="Wizard">Magicien</option>
                <option value="Archer">Archer</option>
            </select>
        </div>



        <div class="form-class">

            <div class="pseudo">
                <label>Entrer votre pseudo</label>
                <input type="text" name="pseudo">
            </div>

            <div class="btn-submit">
                <input type="submit">
            </div>
        </div>






    </form>




    <script src="./main.js"></script>




</body>

</html>