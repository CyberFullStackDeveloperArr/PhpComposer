<?php 

require_once __DIR__ . '/vendor/autoload.php';

use Programmerarr\Data\People;

$people = new People("Arr");

echo $people->sayHello("hantu") . PHP_EOL;

