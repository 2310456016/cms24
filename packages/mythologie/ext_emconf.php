<?php

/**
 * Extension Manager/Repository config file for ext "mythologie".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'mythologie',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fhooe\\Mythologie\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Melanie Ramer',
    'author_email' => 's2310456016@fhooe.at',
    'author_company' => 'fhooe',
    'version' => '1.0.0',
];
