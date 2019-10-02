<?php

namespace ComplexCalculator;

/**
 * Класс калькулятора реализующиего арифметические действия с комплексными числами
 * @package ComplexCalculator
 */
class ComplexCalculator implements ComplexCalculatorInterface
{
    /**
     * {@inheritDoc}
     */
    public function add(ComplexNumberInterface $a, ComplexNumberInterface $b): ComplexNumberInterface
    {
        $real = $a->real() + $b->real();
        $imag = $a->imag() + $b->imag();
        return new ComplexNumber($real, $imag);
    }

    /**
     * {@inheritDoc}
     */
    public function subtract(ComplexNumberInterface $a, ComplexNumberInterface $b): ComplexNumberInterface
    {
        $real = $a->real() - $b->real();
        $imag = $a->imag() - $b->imag();
        return new ComplexNumber($real, $imag);
    }

    /**
     * {@inheritDoc}
     */
    public function multiply(ComplexNumberInterface $a, ComplexNumberInterface $b): ComplexNumberInterface
    {
        $real = ($a->real() * $b->real()) + ($a->imag() * $b->imag() * -1);
        $imag = ($a->real() * $b->imag()) + ($a->imag() * $b->real());
        return new ComplexNumber($real, $imag);
    }

    /**
     * {@inheritDoc}
     */
    public function divide(ComplexNumberInterface $a, ComplexNumberInterface $b): ComplexNumberInterface
    {
        /** Комплексно-сопряженное $b */
        $bConjugate = new ComplexNumber($b->real(), $b->imag() * -1);

        /** Вычисляем числитель */
        $numerator = $this->multiply($a, $bConjugate);
        /** Вычисляем знаменатель */
        $denominator = $this->multiply($b, $bConjugate);

        if ($denominator->real() === 0) {
            throw new DivisionByZeroException();
        }

        $real = $numerator->real() / $denominator->real();
        $imag = $numerator->imag() / $denominator->real();

        return new ComplexNumber($real, $imag);
    }
}
