<?php

namespace app\core\heroes;

class Wizard extends Hero
{
    public function allowedWeapons(): array
    {
        return ['magic'];
    }
}