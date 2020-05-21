<?php
$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/index.php');

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
    ])
    ->setUsingCache(false)
    ->setFinder($finder);
