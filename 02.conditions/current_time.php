<?php

date_default_timezone_set('Europe/Amsterdam');
$now = date('H:i', time());

echo $now . " ";

if ( $now >= "05:00" AND $now <= "09:00" ) {
    echo "Good morning !";
} elseif ( $now > "09:00" AND $now <= "12:00" ) {
    echo "Good day !";
} elseif ( $now > "12:00" AND $now <= "16:00" ) {
    echo "Good afternoon !";
} elseif ( $now > "16:00" AND $now <= "21:00" ) {
    echo "Good evening !";
} elseif ( $now > "21:00" AND $now <= "04:59" ) {
    echo "Good night !";
} else {
    echo "Error, out of value";
}