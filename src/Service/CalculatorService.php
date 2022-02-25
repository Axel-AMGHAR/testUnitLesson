<?php 
namespace App\Service;

class CalculatorService
{
    public function add($value1, $value2)
    {
        return $value1 + $value2;
    }

    public function subtract($value1, $value2)
    {
        return $value1 - $value2;
    }

    public function divide($value1, $value2): float|int
    {
        return $value1 / $value2;
    }

    public function modulo($value1, $value2): int
    {
        return $value1 % $value2;
    }

    public function square($value): float
    {
        return sqrt($value);
    }
}