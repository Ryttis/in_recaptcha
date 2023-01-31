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

namespace Invertus\Inrecaptcha\Infrastructure\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

class ExceptionCode
{
    //Infrastructure related code should start with 6***
    const INFRASTRUCTURE_FAILED_TO_INSTALL_DATABASE_TABLE = 6001;
    const INFRASTRUCTURE_FAILED_TO_INSTALL_MODULE_TAB = 6002;
    //Any other unhandled codes should start with 9***
    const UNKNOWN_ERROR = 9001;
    const INVALID_ARGUMENT = 9002;
}
