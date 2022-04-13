<?php

function split_special_char(string $string): string
{
    $model = 'æ';

    if (str_contains($string, $model)) {
        return str_replace($model, 'ae', $string);
    } else  {
        return "Do not contain..." . $model;
    }
}

function join_special_char(string $string): string
{
    $model = 'ae';

    if (str_contains($string, $model)) {
        return str_replace($model, 'æ', $string);
    } else  {
        return "Do not contain..." . $model;
    }
}


echo split_special_char("microsphæra");
echo "<br>";
echo join_special_char("microsphaera");
