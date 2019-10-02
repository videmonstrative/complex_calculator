<?php

namespace ComplexCalculator;

/**
 * Интерфейс калькулятора реализующиего арифметические действия с комплексными числами
 * @package ComplexCalculator
 */
interface ComplexCalculatorInterface
{
    /**
     * Вычисляет сумму двух комплексных чисел,
     * и возвращает результат в виде нового комплексного числа
     * @param ComplexNumberInterface $a
     * @param ComplexNumberInterface $b
     * @return ComplexNumberInterface
     */
    public function add(ComplexNumberInterface $a, ComplexNumberInterface $b): ComplexNumberInterface;

    /**
     * Вычисляет разность двух комплексных чисел,
     * и возвращает результат в виде нового комплексного числа
     * @param ComplexNumberInterface $a
     * @param ComplexNumberInterface $b
     * @return ComplexNumberInterface
     */
    public function subtract(ComplexNumberInterface $a, ComplexNumberInterface $b): ComplexNumberInterface;

    /**
     * Вычисляет произведение двух комплексных чисел,
     * и возвращает результат в виде нового комплексного числа
     * @param ComplexNumberInterface $a
     * @param ComplexNumberInterface $b
     * @return ComplexNumberInterface
     */
    public function multiply(ComplexNumberInterface $a, ComplexNumberInterface $b): ComplexNumberInterface;

    /**
     * Вычисляет частное двух комплексных чисел,
     * и возвращает результат в виде нового комплексного числа
     * @param ComplexNumberInterface $a
     * @param ComplexNumberInterface $b
     * @throws DivisionByZeroException
     * @return ComplexNumberInterface
     */
    public function divide(ComplexNumberInterface $a, ComplexNumberInterface $b): ComplexNumberInterface;
}
