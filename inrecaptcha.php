<?php
/**
 * 2016 - 2017 Invertus, UAB
 *
 * NOTICE OF LICENSE
 *
 * Module Products Bundle Advanced
 * This file is proprietary and can not be copied and/or distributed
 * without the express permission of INVERTUS, UAB
 * License made effective the 04 day of December 2015
 *
 * This module is compatible with PrestaShop 1.7.1.x
 *
 * @author    INVERTUS, UAB www.invertus.eu <help@invertus.eu>
 * @copyright Copyright (c) permanent, INVERTUS, UAB
 * @license   Addons PrestaShop license limitation
 *
 * International Registered Trademark & Property of INVERTUS, UAB
 */
if (!defined('_PS_VERSION_')) {
    exit;
}
class Inrecaptcha extends Module
{
    /**
     * @var string
     */
    public $version;

    public $configuration_list = [
        'RECAPTCHA_SITEKEY' => '',
        'RECAPTCHA_SECRETKEY' => '',
        'RECAPTCHA_TYPE' => '1',
        'RECAPTCHA_ACTIVE' => '0',
        'RECAPTCHA_REGISTRATIONFORM' => '1',
        'RECAPTCHA_LOGINFORM' => '1',
        'RECAPTCHA_CONTACTFORM' => '1',
        'RECAPTCHA_NUMBERLOGINFAIL' => '3',
        'RECAPTCHA_THEME' => '1',
        'RECAPTCHA_SIZE' => '1',
        'RECAPTCHA_LANGUAGE' => '1',
        'RECAPTCHA_IPADDRESSNAME' => '',
        'RECAPTCHA_IPADDRESS' => '',
        'RECAPTCHA_WHITELIST' => '',
        'RECAPTCHA_BLACKLIST' => '',
        'RECAPTCHA_DATE_INSTALL' => '',
    ];

    public $bootstrap;
    public $js_path;
    public $css_path;
    public $img_path;
    public $docs_path;
    public $logo_path;
    public $isPsVersion17;
    public $confirmUninstall;

    public function __construct()
    {
        $this->name = 'inrecaptcha';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Invertus';
        $this->bootstrap = true;

        $this->module_key = 'weeaa282cf95f70b26f6e1b947cb423d';

        parent::__construct();

        $this->displayName = $this->l('inCaptcha - spam preventing tool');
        $this->description = $this->l('Module in_recaptcha adds the possibility to install a checkbox or invisible check to various PrestaShop forms');

        // Settings paths
        $this->js_path = $this->_path . 'views/js/';
        $this->css_path = $this->_path . 'views/css/';
        $this->img_path = $this->_path . 'views/img/';
        $this->docs_path = $this->_path . 'docs/';
        $this->logo_path = $this->_path . 'logo.png';
        $this->isPsVersion17 = (bool) version_compare(_PS_VERSION_, '1.7', '>=');

        // Confirm uninstall
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall this module?');
    }

    /**
     * install
     *
     * @return bool
     */
    public function install()
    {
        $this->setDefaultConfig();

        if (parent::install()
            && $this->installTab()
            && $this->registerHook($this->hook_list)
        ) {
            return true;
        } else {
            $this->_errors[] = $this->l('There was an error during the installation.');

            return false;
        }
    }

    public function uninstall()
    {
        return true;
    }

    public function setDefaultConfig()
    {
        return true;
    }

    public function installTab()
    {
        return true;
    }
}
