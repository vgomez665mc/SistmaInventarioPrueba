<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'BootstrapUI' => $baseDir . '/vendor/friendsofcake/bootstrap-ui/',
        'CakeCaptcha' => $baseDir . '/vendor/captcha-com/cakephp-captcha/',
        'CakePdf' => $baseDir . '/vendor/friendsofcake/cakepdf/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/'
    ]
];