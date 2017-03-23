<?php

// These are production server settings, shared between all developers
$config_prod = [
    'db' => [
        'login' => 'db_user',
        'password' => 'db_pass',
        'name' => 'db_name'
    ],
    'site' => [
        'email' => 'info@tmcms.eu',
        'name' => 'The Modern CMS main site'
    ],
    'cms' => [
        'unique_key' => 'registered_key', // Required for updates
        'logo' => '/vendor/devp-eu/tmcms-core/src/assets/images/logo.png', // Logo in admin panel
        'favicon' => DIR_CMS_IMAGES_URL . 'logo_square.png', // Favicon in admin panel
        'logo_link' => 'http://devp.eu/', // Link on logo in admin panel
    ],
    'http_auth' => [
        'login' => '', // Set if required
        'password' => '',
    ],
];

// Change all your local settings in local.php - file should return array with fields to be overwritten
$config_local = [];
if (file_exists(__DIR__ . '/local.php')) {
    $config_local = include_once __DIR__ . '/local.php';
}

return array_replace_recursive($config_prod, $config_local);