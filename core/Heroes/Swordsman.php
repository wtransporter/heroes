<?php

namespace app\core\heroes;

class Swordsman extends Hero
{
    public function allowedWeapons(): array
    {
        return ['sword', 'spear'];
    }
}