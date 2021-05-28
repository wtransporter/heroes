<?php

namespace app\core\heroes;

abstract class Hero
{
    public array $weapons = [];

    public function getWeapon(string $weapon): void
    {
        $this->weapons[] = $weapon;
    }
    
    public function throwWeapon(string $weapon): void
    {
        $start = array_search($weapon, $this->weapons);
        array_splice($this->weapons, $start, 1);
    }
}