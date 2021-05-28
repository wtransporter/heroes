<?php

namespace app\core\heroes;

class Swordsman extends Hero
{
    protected int $health = 100;

    protected function allowedWeapons(): array
    {
        return ['sword', 'spear'];
    }
}