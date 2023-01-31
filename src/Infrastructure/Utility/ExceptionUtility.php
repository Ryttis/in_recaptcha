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
namespace Invertus\Inrecaptcha\Infrastructure\Utility;

if (!defined('_PS_VERSION_')) {
    exit;
}

class ExceptionUtility
{
    public static function toArray(\Exception $exception)
    {
        if (method_exists($exception, 'getContext')) {
            $context = $exception->getContext();
        } else {
            $context = [];
        }

        return [
            'message' => (string) $exception->getMessage(),
            'code' => (int) $exception->getCode(),
            'file' => (string) $exception->getFile(),
            'line' => (int) $exception->getLine(),
            'context' => $context,
        ];
    }
}
