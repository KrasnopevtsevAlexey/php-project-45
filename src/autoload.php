<?php

$autoloadPaths = [
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../../../autoload.php',
    __DIR__ . '/../../../../autoload.php',
];

foreach ($autoloadPaths as $path) {
    if (file_exists($path)) {
        require_once $path;
        return;
    }
}


fwrite(STDERR, "Error: Could not find Composer autoloader. Please run 'composer install'\n");
exit(1);
