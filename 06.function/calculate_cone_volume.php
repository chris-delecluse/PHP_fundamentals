<?php

function calculate_cone_volume($radius, $height)
{
    $result =  3.14 * $radius * $radius * $height / 3;

    echo 'The volume of a cone which ray is ' . $radius . ' and height is ' . $height . ' = ' . $result . ' cm<sup>3</sup><br />';
}

calculate_cone_volume(5,9);