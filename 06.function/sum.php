<?php

function sum(int|float $number_1, int|float $number_2): int|float
{
    $error_msg = "Error, this is not a integer or double.";

    if (gettype($number_1) == "integer" or gettype($number_1) == "double"
        and gettype($number_2) == "integer" or gettype($number_2) == "double") {
        return $number_1 + $number_2;
    }

    return $error_msg;
}

echo sum(2.2, 9);
