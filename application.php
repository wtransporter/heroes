<?php

require_once './vendor/autoload.php';

use app\core\heroes\Wizard;

$hero = new Wizard();

try {
    $hero->getWeapon('magic');
    $hero->getWeapon('magic');
    $hero->getWeapon('magic');
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}