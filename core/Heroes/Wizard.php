<?php

namespace app\core\heroes;

class Wizard extends Hero
{
    protected int $health = 150;

    protected function allowedWeapons(): array
    {
        return ['magic'];
    }

    public function reduceHealth(int $value): void
    {
        $this->health -= $value;
    }
}