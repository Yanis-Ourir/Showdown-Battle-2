<?php

include('../config/connexion.php');
include('./personnage.php');

class CombatManager
{
    private $pdo;

    private $name = $_POST['chooseOpponent'];

    public function __construct($pdo) {
        
        $this->pdo = $pdo;

    }

    public function addFight()
    {
        $sqlAddFight = "INSERT INTO combat (id, characters, id_user, id_personnage) VALUES (null, '$this->name', id_user, id_personnage)";
        $this->pdo->exec($sqlAddFight);
    }

    public function characterUpdate()
    {
        $sqlUpdate = "UPDATE combat SET (id, characters, id_user, id_personnage) VALUES (null, '$this->name', id_user, id_personnage)";
    }

    public function deleteFight($fight)
    {
        try {

            $sqlDelete = $this->pdo->prepare("DELETE FROM combat WHERE id = '$fight'");
            $fightDelete = $sqlDelete->execute();

            echo "Combat bien supprimé";
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function selectFight($fight)
    {
        $sqlSelect = $this->pdo->prepare("SELECT FROM combat WHERE id = '$fight'");
        $fightSelect = $sqlSelect->execute();
    }

    public function fightCount()
    {
        $sqlCount = $this->pdo->prepare("SELECT COUNT(*) FROM combat");
        $sqlCount->execute();
    }

    public function fightList()
    {
        $sqlFightList = "SELECT * FROM personnage";
        $fightList = $this->pdo->prepare($sqlFightList);
        $fightList->execute();
        $fights = $fightList->fetchAll();

        foreach ($fights as $fight) {
            echo "<p>" . $fight['name'] . "</p><br>";
        }
    }
}
