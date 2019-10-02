<?php

namespace ComplexCalculator;

/**
 * Интерфейс комплексного числа
 * @package ComplexCalculator
 */
interface ComplexNumberInterface
{
    /**
     * Возвращает действительную часть комплексного числа
     * @return int
     */
    public function real(): int;

    /**
     * Возвращает мнимую часть комплексного числа
     * @return int
     */
    public function imag(): int;

    /**
     * Производит сравнение текущего комплексного числа с переданным
     * @param ComplexNumberInterface $b
     * @return bool
     */
    public function isA(ComplexNumberInterface $b): bool;
}
