<?php
include "Calculator.php";

$calc = new Calculator();

echo $calc->add(1,4);
echo "<br>";
echo $calc->subtract(6,3);
echo "<br>";
echo $calc->multiply(3,5);
echo "<br>";
echo $calc->divide(15,3);