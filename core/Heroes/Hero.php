<?php

namespace app\core\heroes;

use app\core\exceptions\WeaponNotAllowedException;

abstract class Hero
{
    public array $weapons = [];

    abstract public function allowedWeapons(): array;

    public function getWeapon(string $weapon): void
    {
        $this->validate($weapon);
        $this->weapons[] = $weapon;
    }
    
    public function throwWeapon(string $weapon): void
    {
        $start = array_search($weapon, $this->weapons);
        array_splice($this->weapons, $start, 1);
    }

    public function validate($weapon)
    {
        if (!in_array($weapon, $this->allowedWeapons())) {
            throw new WeaponNotAllowedException("This weapon is not allowed");
        }
    }
}