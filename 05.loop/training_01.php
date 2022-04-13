<?php

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $value) {
    if ($value != 'He/She') {
        echo "<p>$value code.</p>";
    } else {
        echo "<p>$value codes.</p>";
    }
}