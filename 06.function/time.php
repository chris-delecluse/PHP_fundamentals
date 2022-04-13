<?php

function current_time($string): string
{
    date_default_timezone_set('Europe/Amsterdam');

    return $string . date('l jS \of F Y h:i:s A', time());
}

echo current_time("The current time is : ");
