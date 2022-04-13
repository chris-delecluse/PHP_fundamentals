<?php

function acronym_in_string(string $string): string
{
    $words = explode(" ", $string);
    $acronym = "";

    foreach ($words as $value){
        $acronym .= $value[0];
    }

    return mb_strtoupper($acronym);
}

echo acronym_in_string("hello guys what's up");
