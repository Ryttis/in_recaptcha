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

namespace Invertus\Inrecaptcha\Infrastructure\Bootstrap\Install;

use Invertus\Inrecaptcha\Infrastructure\Exception\CouldNotInstallModule;

if (!defined('_PS_VERSION_')) {
    exit;
}
interface InstallerInterface
{
    /**
     * @throws CouldNotInstallModule
     */
    public function init();
}
