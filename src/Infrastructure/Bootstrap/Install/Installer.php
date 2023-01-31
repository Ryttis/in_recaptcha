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

if (!defined('_PS_VERSION_')) {
    exit;
}

class Installer implements InstallerInterface
{
    private $configurationInstaller;
    private $hookInstaller;
    private $databaseTableInstaller;
    private $moduleTabInstaller;

    public function __construct(HookInstaller          $hookInstaller,
                                ConfigurationInstaller $configurationInstaller,
                                DatabaseTableInstaller $databaseTableInstaller,
                                ModuleTabInstaller     $moduleTabInstaller,
        ){
        $this->hookInstaller = $hookInstaller;
        $this->configurationInstaller = $configurationInstaller;
        $this->databaseTableInstaller = $databaseTableInstaller;
        $this->moduleTabInstaller = $moduleTabInstaller;
    }

    public function init()
    {
        return true;
    }
}
