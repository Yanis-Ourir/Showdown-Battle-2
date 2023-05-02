<?php

class Monster
{
    private $monsterName;
    private $hp;
    private $type;
    private $damage;

    public function __construct($monsterName, $type)
    {
        $this->monsterName = $monsterName;
        $this->type = $type;
    }

    /*  SETTER */

    public function setMonsterHp()
    {
        if ($this->type === 'sorcier') {
            $this->hp = 50;
        } else if ($this->type === 'fantassin') {
            $this->hp = 70;
        } else if ($this->type === 'ogre') {
            $this->hp = 90;
        }
    }

    public function setMonsterDamage()
    {
        if ($this->type === 'sorcier') {
            $this->damage = 20;
        } else if ($this->type === 'fantassin') {
            $this->damage = 18;
        } else if ($this->type === 'ogre') {
            $this->damage = 15;
        }
    }

    /* GETTER */

    public function getMonsterName()
    {
        return $this->monsterName;
    }

    public function getMonsterDamage()
    {
        return $this->damage;
    }

    public function getMonsterHp()
    {
        return $this->hp;
    }

    public function getMonsterType()
    {
        return $this->type;
    }

    public function inflictDamage($player)
    {
        $player->hp -= $this->damage;
    }

    public function death()
    {
        if ($this->hp <= 0) {
            echo $this->monsterName . " est mort";
        }
    }
}
