<?php

namespace Invertus\Inrecaptcha\Infrastructure\Exception;

use Invertus\Inrecaptcha\Infrastructure\Exception\ExceptionCode;
use Invertus\Inrecaptcha\Infrastructure\Exception\InrecaptchaException;

class CouldNotInstallModule extends InrecaptchaException
{
    public static function failedToInstallDatabaseTable($databaseTable)
    {
        return new self(
            sprintf('Failed to install database table (%s)', $databaseTable),
            ExceptionCode::INFRASTRUCTURE_FAILED_TO_INSTALL_DATABASE_TABLE,
            null,
            [
                'database_table' => $databaseTable,
            ]
        );
    }

    public static function failedToInstallModuleTab(\Exception $exception, $moduleTab)
    {
        return new self(
            sprintf('Failed to install module tab (%s)', $moduleTab),
            ExceptionCode::INFRASTRUCTURE_FAILED_TO_INSTALL_MODULE_TAB,
            $exception,
            [
                'module_tab' => $moduleTab,
            ]
        );
    }
}
