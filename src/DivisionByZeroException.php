<?php

namespace ComplexCalculator;

use Exception;

/**
 * Исключение "Деление на ноль"
 * @package ComplexCalculator
 */
class DivisionByZeroException extends Exception
{
    protected $message = 'Division by zero';
}
