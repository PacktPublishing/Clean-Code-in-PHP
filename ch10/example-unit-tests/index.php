<?php

use UnitTestsFailExample\MyApp;
use UnitTestsFailExample\MyRepository;

include "vendor/autoload.php";

$repository = new MyRepository();
$app = new MyApp($repository);

echo $app->run();