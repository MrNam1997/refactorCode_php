<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 24/10/2018
 * Time: 23:43
 */

include_once "Calculator.php";

class CalculatorTest extends Calculator
{
    public function testCalculateAdd()
    {
        $firstOperand = 1;
        $secondOperand = 1;
        $operator = '+';


        $calculator = new Calculator();
        $result = $calculator->calculate($firstOperand, $secondOperand, $operator);
        echo $result;
    }


}

$test = new CalculatorTest();
$test->testCalculateAdd();