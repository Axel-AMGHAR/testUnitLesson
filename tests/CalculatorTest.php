<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Service\CalculatorService;

class CalculatorTest extends KernelTestCase
{
    public function testAddition(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->add(1,1);
        $this->assertEquals(2, $result);
    }

    public function testSubscription(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->subtract(1,1);
        $this->assertEquals(0, $result);
    }

    public function testDivision(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $this->assertEquals(1, $calculatorService->divide(1,1));
        $this->assertEquals(10, $calculatorService->divide(10,1));
        $this->assertEquals(5, $calculatorService->divide(10,2));
        $this->expectException(\DivisionByZeroError::class);
        $calculatorService->divide(1,0);
    }

    public function testModulo(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $this->assertEquals(0, $calculatorService->modulo(1,1));
        $this->assertEquals(0, $calculatorService->modulo(2,1));
        $this->assertEquals(1, $calculatorService->modulo(3,2));
    }

    public function testSquare(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $this->assertEquals(4, $calculatorService->square(16));
        $this->assertEquals(1, $calculatorService->square(1));
    }
}
