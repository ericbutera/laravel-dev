<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude(['vendor', 'bootstrap/cache', 'storage']);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12'                 => true,
        'array_syntax'           => ['syntax' => 'short'],
        'no_unused_imports'      => true,
        'binary_operator_spaces' => ['default' => 'align_single_space_minimal'],
        'ordered_imports'        => ['sort_algorithm' => 'alpha'],
    ])
    ->setFinder($finder)
    ->setRiskyAllowed(true);
