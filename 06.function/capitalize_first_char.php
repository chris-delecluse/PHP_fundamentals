<?php

function capitalize_first_char(string $string): string
{
    return (gettype($string) == "string") ? mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1) : "Error, this is not a string.";
}

echo capitalize_first_char("ènolà | ");