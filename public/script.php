<?php

use Aviary\Duck;
use Aviary\Pigeon;
use Aviary\Pinguin;

require_once __DIR__ . '/../vendor/autoload.php';

$roucool = new Pigeon("Roucool", 1);
$canard = new Duck("Canarticho", 8);
$pingoo = new Pinguin("Pingu", 2);

$birds = [$roucool, $canard, $pingoo];

foreach ($birds as $bird) {
    if ($bird instanceof Duck) {
        echo $bird->getName() . " va dans la marre\n";
    }
    if ($bird instanceof Pigeon) {
        echo $bird->getName() . " va dans la volière\n";
    }
    if ($bird instanceof Pinguin) {
        echo $bird->getName() . " va sur la banquise\n";
    }
}

try {
    $roucool->flyUp();
    $roucool->flyUp();
    echo $roucool->getAltitude() . PHP_EOL;
    $roucool->flyDown();
    $roucool->flyDown();
    echo $roucool->getAltitude() . PHP_EOL;
    $roucool->flyDown();
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

try {
    $pingoo->swimDown();
    $pingoo->swimDown();
    $pingoo->swimDown();
    $pingoo->swimDown();
    $pingoo->swimUp();
    echo $pingoo->getDepth() . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

try {
    $canard->flyUp();
    $canard->flyDown();
    $canard->swimDown();
    $canard->swimDown();
    $canard->swimDown();
    $canard->swimDown();
    $canard->swimDown();
    echo $canard->getDepth(). PHP_EOL;
    ;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
