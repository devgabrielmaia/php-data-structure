<?php

use Devgabrielmaia\PhpDataStructure\App;

include('./vendor/autoload.php');
include('./src/App.php');

if (!isset($argv[1])) {
    echo "data-structure parameter is missing. ex: data-structure='stack' \n";
    return;
}

$app = new App();
$app->run($argv[1]);

