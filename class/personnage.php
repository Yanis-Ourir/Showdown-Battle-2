<?php

class Personnage
{
    protected $name;
    private $hp = 100;
    private $class = ['Warrior', 'Wizard', 'Archer'];
    private $cible;
    private $atk = 20;


    public function __construct($name, $class)
    {
        $this->name = $name;
        $this->class = $class;
    }

    public function attack($cible)
    {
        $cible->hp -= $this->atk;
    }


    public function death()
    {
        if ($this->hp <= 0) {
            echo $this->name . " est mort";
        }
    }
}
