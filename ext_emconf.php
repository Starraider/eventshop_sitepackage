<?php

/**
 * Extension Manager/Repository config file for ext "eventshop_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'eventshop sitepackage',
    'description' => 'Sitepackage based on bootstrap package, cart and  cart events',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '10.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Skom\\EventshopSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sven Kalbhenn',
    'author_email' => 'sven@skom.de',
    'author_company' => 'SKom',
    'version' => '1.0.0',
];
