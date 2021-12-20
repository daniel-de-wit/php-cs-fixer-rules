<?php

return [
    '@PSR12'                                  => true,
    '@PSR12:risky'                            => true,
    '@PHP80Migration:risky'                   => true,
    '@PHP81Migration'                         => true,
    '@PHPUnit84Migration:risky'               => true,
    '@PhpCsFixer'                             => true,
    '@PhpCsFixer:risky'                       => true,
    'php_unit_test_class_requires_covers'     => false,
    'php_unit_test_annotation'                => [
        'style' => 'annotation',
    ],
    'php_unit_method_casing'                  => [
        'case' => 'snake_case',
    ],
    'use_arrow_functions'                     => false,
    'strict_comparison'                       => false,
    'native_function_invocation'              => false,
    'control_structure_continuation_position' => true,
    'date_time_immutable'                     => true,
    'declare_parentheses'                     => true,
    'trailing_comma_in_multiline'             => [
        'after_heredoc' => true,
        'elements'      => [
            'arrays',
            'arguments',
            'parameters',
        ],
    ],
];
