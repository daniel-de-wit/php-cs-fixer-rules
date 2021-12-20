<?php

namespace DanielDeWit;

use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use PhpCsFixer\Finder;

function phpcsfixer(Finder $finder, array $rules = []): ConfigInterface {
    $rules = array_merge(require __DIR__ . '/rules.php', $rules);

    return (new Config())
        ->setRules($rules)
        ->setRiskyAllowed(true)
        ->setFinder($finder);
}
