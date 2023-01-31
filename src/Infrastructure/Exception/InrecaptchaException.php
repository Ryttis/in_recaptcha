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
namespace Invertus\Inrecaptcha\Infrastructure\Exception;

use Invertus\Inrecaptcha\Infrastructure\Utility\ExceptionUtility;

class InrecaptchaException extends \Exception
{
    private $context;

    public function __construct(
        $message,
        $code,
        $previous = null,
        array $context = []
    ) {
        parent::__construct($message, $code, $previous);
        $this->context = $context;
    }

    public function getContext()
    {
        return $this->context;
    }

    public function getExceptions()
    {
        $exceptions = [];
        $exception = $this;
        while ($exception) {
            $exceptions[] = ExceptionUtility::toArray($exception);

            $exception = $exception->getPrevious();
        }

        return $exceptions;
    }

    public static function unknownError(\Exception $exception)
    {
        return new static(
            'Unknown error error occurred. Please check system logs or contact support',
            ExceptionCode::UNKNOWN_ERROR,
            $exception
        );
    }
}
