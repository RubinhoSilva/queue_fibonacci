<?php

namespace Tests\Unit;

use App\Utils\Fibonacci\Fibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_value_0()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(0, $fibonacci->calculate(0));
    }

    public function test_value_1()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->calculate(1));
    }

    public function test_value_2()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->calculate(2));
    }

    public function test_value_3()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(2, $fibonacci->calculate(3));
    }

    public function test_value_4()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(3, $fibonacci->calculate(4));
    }

    public function test_value_10()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(55, $fibonacci->calculate(10));
    }

    public function test_value_50()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(12586269025, $fibonacci->calculate(50));
    }
}
