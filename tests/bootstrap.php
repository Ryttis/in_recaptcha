<?php
/**
 * NOTICE OF LICENSE
 *
 * @author    INVERTUS, UAB www.invertus.eu <support@invertus.eu>
 * @copyright Copyright (c) permanent, INVERTUS, UAB
 * @license   MIT
 * @see       /LICENSE
 *
 *  International Registered Trademark & Property of INVERTUS, UAB
 */

$rootDirectory = __DIR__ . '/../../../';
$projectDir = __DIR__ . '/../';

require_once $projectDir . 'vendor/autoload.php';
require_once $rootDirectory . 'config/config.inc.php';

if (file_exists($rootDirectory . 'vendor/autoload.php')) {
    require_once $rootDirectory . 'vendor/autoload.php';
}

if (file_exists($rootDirectory . 'autoload.php')) {
    require_once $rootDirectory . 'autoload.php';
}

if (class_exists(AppKernel::class)) {
    $kernel = new AppKernel('dev', _PS_MODE_DEV_);
    $kernel->boot();
}
