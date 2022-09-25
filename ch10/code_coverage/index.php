<?php

use CodeCoverageExample\MyApp;
use CodeCoverageExample\MyRepository;

include "vendor/autoload.php";

$repository = new MyRepository();
$app = new MyApp($repository);

echo $app->run();