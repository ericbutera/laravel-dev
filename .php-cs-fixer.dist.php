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
        'no_extra_blank_lines'   => true,
        'no_extra_blank_lines'   => [ // Customize blank line removal
            'tokens' => [
                'attribute',
                'break',
                'case',
                'continue',
                'curly_brace_block',
            ],
        ],

    ])
    ->setFinder($finder)
    ->setRiskyAllowed(true);
