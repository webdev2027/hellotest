<?php

/**
 * Extension Manager/Repository config file for ext "hellotest".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Hellotest',
    'description' => 'Test for composer',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Hellotypo3de\\Hellotest\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Hellotest',
    'author_email' => 'hello@hellotypo3.de',
    'author_company' => 'hellotypo3.de',
    'version' => '1.0.0',
];
