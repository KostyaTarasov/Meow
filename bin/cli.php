<?php

require_once __DIR__ . '/../vendor/autoload.php';

use MyProject\Cli\CatSoundCommand;

$commandName = $argv[1] ?? null;
$params = array_slice($argv, 2);

if ($commandName === 'CatSoundCommand') {
    $command = new CatSoundCommand($params);
    $command->execute();
} else {
    echo "Unknown command: $commandName" . PHP_EOL;
}