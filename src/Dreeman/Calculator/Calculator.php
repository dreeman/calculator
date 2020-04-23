<?php

namespace Dreeman\Calculator;

use Exception;

class Calculator {
    /**
     * @param int $a
     * @param int $b
     * @param string $operation
     * @return float
     * @throws Exception
     */
    public static function calc(int $a, int $b, string $operation = '+'): float
    {
        switch ($operation) {
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
            case '*':
                $result = $a * $b;
                break;
            case '/':
                if ($b == 0) {
                    throw new Exception('Division by zero!');
                }
                $result = $a / $b;
                break;
            default:
                throw new Exception('Invalid operation!');
                break;
        }
        return $result;
    }
}
