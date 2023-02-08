<?php
include('../config/connexion.php');
include('./personnage.php');

class CharacterManager
{

    public function addCharacter()
    {
        $sqlAddFight = "INSERT INTO personnage (id_personnage, name, hp, damage) VALUES (null, $name, hp, damage)";
        $pdo->exec($sqlAddFight);
    }

    public function characterUpdate()
    {
        $sqlUpdate = "UPDATE INTO";
    }

    public function deleteCharacter($name)
    {
        try {

            $sqlDelete = $pdo->prepare("DELETE FROM personnage WHERE id_personnage = '$name'");
            $characterDelete = $sqlDelete->execute();

            echo "Personne bien supprimé";
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function selectCharacter($name)
    {
        $sqlSelect = $pdo->prepare("SELECT FROM personnage WHERE id_personnage = '$name'");
        $characterSelect = $sqlSelect->execute();
    }

    public function characterCount()
    {
        $sqlCount = $pdo->prepare("SELECT COUNT(*) FROM personnage");
        $sqlCount->execute();
    }

    public function charactersList()
    {
        $sqlCharactersList = "SELECT * FROM personnage";
        $charactersList = $pdo->prepare($sqlCharactersList);
        $charactersList->execute();
        $characters = $charactersList->fetchAll();

        foreach ($characters as $character) {
            echo "<p>" . $character['name'] . "</p><br>";
        }
    }
}
