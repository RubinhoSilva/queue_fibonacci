<?php

namespace App\Utils\Fibonacci;

class Fibonacci implements FibonacciInterface
{
    public function calculate($n)
    {
        $a = 0;
        $b = 1;

        if ($n == 0) {
            return $a;
        }

        if ($n == 1) {
            return $b;
        }

        for ($i = 2; $i <= $n; $i++) {
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }

        return $b;
    }
}
