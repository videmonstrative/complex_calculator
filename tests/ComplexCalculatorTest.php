<?php

use ComplexCalculator\ComplexCalculator;
use ComplexCalculator\ComplexNumber;
use ComplexCalculator\DivisionByZeroException;
use PHPUnit\Framework\TestCase;

class ComplexCalculatorTest extends TestCase
{
    /**
     * @dataProvider addDataProvider
     * @param ComplexNumber $a
     * @param ComplexNumber $b
     * @param ComplexNumber $result
     */
    public function testAdd(ComplexNumber $a, ComplexNumber $b, ComplexNumber $result)
    {
        $calculator = new ComplexCalculator();

        $comparison = $calculator->add($a, $b)->isA($result);

        $this->assertTrue($comparison);
    }

    /**
     * @dataProvider subtractDataProvider
     * @param ComplexNumber $a
     * @param ComplexNumber $b
     * @param ComplexNumber $result
     */
    public function testSubtract(ComplexNumber $a, ComplexNumber $b, ComplexNumber $result)
    {
        $calculator = new ComplexCalculator();

        $comparison = $calculator->subtract($a, $b)->isA($result);

        $this->assertTrue($comparison);
    }

    /**
     * @dataProvider multiplyDataProvider
     * @param ComplexNumber $a
     * @param ComplexNumber $b
     * @param ComplexNumber $result
     */
    public function testMultiply(ComplexNumber $a, ComplexNumber $b, ComplexNumber $result)
    {
        $calculator = new ComplexCalculator();

        $comparison = $calculator->multiply($a, $b)->isA($result);

        $this->assertTrue($comparison);
    }

    /**
     * @dataProvider divideDataProvider
     * @param ComplexNumber $a
     * @param ComplexNumber $b
     * @param ComplexNumber $result
     * @throws DivisionByZeroException
     */
    public function testDivide(ComplexNumber $a, ComplexNumber $b, ComplexNumber $result)
    {
        $calculator = new ComplexCalculator();

        $comparison = $calculator->divide($a, $b)->isA($result);

        $this->assertTrue($comparison);
    }

    /**
     * @dataProvider divideByZeroDataProvider
     * @param ComplexNumber $a
     * @param ComplexNumber $b
     * @throws DivisionByZeroException
     */
    public function testDivisionByZeroException(ComplexNumber $a, ComplexNumber $b)
    {
        $this->expectException(DivisionByZeroException::class);

        $calculator = new ComplexCalculator();

        $calculator->divide($a, $b);
    }

    public function addDataProvider()
    {
        return [
            [new ComplexNumber(0, 0), new ComplexNumber(0, 0), new ComplexNumber(0, 0)],
            [new ComplexNumber(1, 1), new ComplexNumber(1, 1), new ComplexNumber(2, 2)],
            [new ComplexNumber(-1, -1), new ComplexNumber(-1, -1), new ComplexNumber(-2, -2)],
            [new ComplexNumber(1, -1), new ComplexNumber(1, -1), new ComplexNumber(2, -2)],
            [new ComplexNumber(-1, 1), new ComplexNumber(-1, 1), new ComplexNumber(-2, 2)],
            [new ComplexNumber(-1, 1), new ComplexNumber(1, -1), new ComplexNumber(0, 0)],
            [new ComplexNumber(1, -1), new ComplexNumber(-1, 1), new ComplexNumber(0, 0)],
        ];
    }

    public function subtractDataProvider()
    {
        return [
            [new ComplexNumber(0, 0), new ComplexNumber(0, 0), new ComplexNumber(0, 0)],
            [new ComplexNumber(1, 1), new ComplexNumber(1, 1), new ComplexNumber(0, 0)],
            [new ComplexNumber(-1, -1), new ComplexNumber(-1, -1), new ComplexNumber(0, 0)],
            [new ComplexNumber(1, -1), new ComplexNumber(1, -1), new ComplexNumber(0, 0)],
            [new ComplexNumber(-1, 1), new ComplexNumber(-1, 1), new ComplexNumber(0, 0)],
            [new ComplexNumber(-1, 1), new ComplexNumber(1, -1), new ComplexNumber(-2, 2)],
            [new ComplexNumber(1, -1), new ComplexNumber(-1, 1), new ComplexNumber(2, -2)],
        ];
    }

    public function multiplyDataProvider()
    {
        return [
            [new ComplexNumber(0, 0), new ComplexNumber(0, 0), new ComplexNumber(0, 0)],
            [new ComplexNumber(1, 1), new ComplexNumber(1, 1), new ComplexNumber(0, 2)],
            [new ComplexNumber(-1, -1), new ComplexNumber(-1, -1), new ComplexNumber(0, 2)],
            [new ComplexNumber(1, -1), new ComplexNumber(1, -1), new ComplexNumber(0, -2)],
            [new ComplexNumber(-1, 1), new ComplexNumber(-1, 1), new ComplexNumber(0, -2)],
            [new ComplexNumber(-1, 1), new ComplexNumber(1, -1), new ComplexNumber(0, 2)],
            [new ComplexNumber(1, -1), new ComplexNumber(-1, 1), new ComplexNumber(0, 2)],
        ];
    }

    public function divideDataProvider()
    {
        return [
            [new ComplexNumber(1, 1), new ComplexNumber(1, 1), new ComplexNumber(1, 0)],
            [new ComplexNumber(-1, -1), new ComplexNumber(-1, -1), new ComplexNumber(1, 0)],
            [new ComplexNumber(1, -1), new ComplexNumber(1, -1), new ComplexNumber(1, 0)],
            [new ComplexNumber(-1, 1), new ComplexNumber(-1, 1), new ComplexNumber(1, 0)],
            [new ComplexNumber(-1, 1), new ComplexNumber(1, -1), new ComplexNumber(-1, 0)],
            [new ComplexNumber(1, -1), new ComplexNumber(-1, 1), new ComplexNumber(-1, 0)],
        ];
    }

    public function divideByZeroDataProvider()
    {
        return [
            [new ComplexNumber(0, 0), new ComplexNumber(0, 0)],
        ];
    }
}
