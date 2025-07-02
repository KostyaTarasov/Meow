<?php

namespace MyProject\Cli;

use MyProject\Cats\CatInterface;
use MyProject\Cats\SiameseCat;
use MyProject\Cats\MaineCoon;
use MyProject\Cats\PersianCat;
use MyProject\Cats\SiberianCat;
use MyProject\Cats\BirmanCat;
use MyProject\Cats\PlushTiger;
use MyProject\Cats\LionKeychain;

class CatSoundCommand extends AbstractCommand
{
    public function execute(): void
    {
        $catType = $this->getParam(0);
        $action = $this->getParam(1);

        echo "DEBUG: catType = $catType, action = $action" . PHP_EOL;

        $cat = $this->createCat($catType);

        if (!$cat) {
            echo "Unknown cat type: " . $catType . PHP_EOL;
            return;
        }

        switch (strtolower($action)) {
            case 'meow':
                if (method_exists($cat, 'meow')) {
                    echo $cat->meow() . PHP_EOL;
                } else {
                    echo "This cat can't meow." . PHP_EOL;
                }
                break;
            case 'purr':
                if (method_exists($cat, 'purr')) {
                    echo $cat->purr() . PHP_EOL;
                } else {
                    echo "This cat can't purr." . PHP_EOL;
                }
                break;
            case 'hunt':
                if (method_exists($cat, 'hunt')) {
                    echo $cat->hunt() . PHP_EOL;
                } else {
                    echo "This cat can't hunt." . PHP_EOL;
                }
                break;
            default:
                echo "Unknown action: " . $action . PHP_EOL;
        }
    }

    private function createCat(string $type): ?CatInterface
    {
        switch (strtolower($type)) {
            case 'siamese':
                return new SiameseCat();
            case 'mainecoon':
                return new MaineCoon();
            case 'persian':
                return new PersianCat();
            case 'siberian':
                return new SiberianCat();
            case 'birman':
                return new BirmanCat();
            case 'plushtiger':
                return new PlushTiger();
            case 'lionkeychain':
                return new LionKeychain();
            default:
                return null;
        }
    }
}
