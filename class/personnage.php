<?php

class Personnage
{
    protected $name;
    protected $hp = 100;
    private $class;
    private $cible;
    private $atk = 20;


    public function __construct($name, $class)
    {
        $this->name = $name;
        $this->class = $class;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getDmg()
    {
        return $this->atk;
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
