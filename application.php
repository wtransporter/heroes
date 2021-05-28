<?php

require_once './vendor/autoload.php';

use app\core\heroes\Wizard;
use app\core\monsters\Dragon;

$hero = new Wizard();
$monster = new Dragon();

$monster->attack($hero);

try {
    $hero->getWeapon('magic');
    $hero->getWeapon('magic');
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}