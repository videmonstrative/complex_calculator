<?php

namespace ComplexCalculator;

/**
 * Класс комплексного числа
 * @package ComplexCalculator
 */
class ComplexNumber implements ComplexNumberInterface
{
    /**
     * @var int
     */
    protected $real;

    /**
     * @var int
     */
    protected $imag;

    /**
     * @param int $real - действительная часть комплексного числа
     * @param int $imag - мнимая часть комплексного числа
     */
    public function __construct(int $real, int $imag)
    {
        $this->real = $real;
        $this->imag = $imag;
    }

    /**
     * {@inheritDoc}
     */
    public function real(): int
    {
        return $this->real;
    }

    /**
     * {@inheritDoc}
     */
    public function imag(): int
    {
        return $this->imag;
    }

    /**
     * {@inheritDoc}
     */
    public function isA(ComplexNumberInterface $b): bool
    {
        return $this->real === $b->real() && $this->imag === $b->imag();
    }
}
