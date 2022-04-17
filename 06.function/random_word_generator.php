<?php

function random_word_generator() : void
{
    $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $small_word_random = "";
    $big_word_random = "";

    for ($i = 0; $i <= rand(4, 6); $i++) {
        $ii = rand(0, strlen($alphabet) -1);
        $small_word_random .= $alphabet[$ii];
    }

    for ($i = 0; $i <= rand(6, 14); $i++) {
        $ii = rand(0, strlen($alphabet) -1);
        $big_word_random .= $alphabet[$ii];
    }

    echo $small_word_random .  " | " . $big_word_random;
}

(isset($_POST['submit'])) ? random_word_generator() : "";

?>

<form action="random_word_generator.php" method="post">

    <input type="submit" name="submit" value="generate">
</form>
