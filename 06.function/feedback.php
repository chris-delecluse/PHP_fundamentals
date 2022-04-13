<?php

function feedback(string $message, string $css_class = "info")
{
    $error = "The class name must do not contain space";

    echo (!str_contains($css_class, " ")) ? "<div class='$css_class'>$message</div>" : $error;
}

feedback("this tag will contain an title.", "title");
feedback("this tag will use the 'info' class.");
