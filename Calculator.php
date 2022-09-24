<?php

class Calculator
{
    public function add($num1, $num2)
    {
        if (!(is_numeric($num1) and is_numeric($num2)))
            return "Both values Must Be Numeric";
        return $num1 + $num2;
    }

    public function subtract($num1, $num2)
    {
        if (!(is_numeric($num1) and is_numeric($num2)))
            return "Both values Must Be Numeric";
        return $num1 - $num2;
    }

    public function multiply($num1, $num2)
    {
        if (!(is_numeric($num1) and is_numeric($num2)))
            return "Both values Must Be Numeric";
        return $num1 * $num2;
    }

    public function divide($num1, $num2)
    {
        if (!(is_numeric($num1) and is_numeric($num2) and $num2 != 0))
            return "Both values Must Be Numeric And Divisor Cant Be Zero";
        return $num1 / $num2;

    }

}