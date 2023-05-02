<?php
include('../config/connexion.php');
include('./personnage.php');

class CharacterManager
{
    private $name;
    private $class;
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo;
    }

    public function addCharacter($name, $class)
    {
        $sqlAddFight = "INSERT INTO personnage (id_personnage, name, hp, damage, class) VALUES (null, '$name', hp, damage, class)";
        $this->pdo->exec($sqlAddFight);
    }

    public function characterUpdate()
    {
        $sqlUpdate = "UPDATE personnage SET (id_personnage, name, hp, dmg, class) VALUES (null, '$this->name', hp, dmg, class)";
    }

    public function deleteCharacter($name)
    {
        try {

            $sqlDelete = $this->pdo->prepare("DELETE FROM personnage WHERE id_personnage = '$name'");
            $characterDelete = $sqlDelete->execute();

            echo "Personnage bien supprimé";
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function selectCharacter($name)
    {
        $sqlSelect = $this->pdo->prepare("SELECT FROM personnage WHERE id_personnage = '$name'");
        $characterSelect = $sqlSelect->execute();
    }

    public function characterCount()
    {
        $sqlCount = $this->pdo->prepare("SELECT COUNT(*) FROM personnage");
        $sqlCount->execute();
    }

    public function charactersList()
    {
        $sqlCharactersList = "SELECT * FROM personnage";
        $charactersList = $this->pdo->prepare($sqlCharactersList);
        $charactersList->execute();
        $characters = $charactersList->fetchAll();

        foreach ($characters as $character) {
            echo "<p>" . $character['name'] . "</p><br>";
        }
    }
}
