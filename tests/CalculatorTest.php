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
        $result  = $calculatorService->addition(1,1);
        $this->assertEquals(2, $result);
    }

    public function testSubscription(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->subscription(1,1);
        $this->assertEquals(0, $result);
    }

    public function testDivision(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $this->assertEquals(1, $calculatorService->division(1,1));
        $this->assertEquals(10, $calculatorService->division(10,1));
        $this->assertEquals(5, $calculatorService->division(10,2));
        $this->assertEquals(null, $calculatorService->division(1,0));
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
