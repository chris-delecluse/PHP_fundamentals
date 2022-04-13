<?php

$name = $_GET['name'];
$age = intval($_GET['age']);
$genre = $_GET['genre'];

$message = "Sorry " . $name . " you don't fit the criteria";

if (isset($_GET['submit'])) {

    if ($age >= 21 AND $age <= 40 AND $genre == "girl") {
        $message = "Welcome to the team " . $name . " !";
    }

    echo $message;
}

?>

<form method="get" action="girl_soccer_team.php">
    <label for="name">Hello, what is your name ?</label>
    <label>
        <input type="text" name="name">
    </label>
    <label for="age">Enter your age ?</label>
    <label>
        <input type="text" name="age">
    </label>
    <label for="genre">Genre : </label>
    <label >
        <input type="radio" name="genre" value="man">
        man
    </label>
    <label>
        <input type="radio" name="genre" value="girl">
        girl
    </label>

    <input type="submit" name="submit" value="send">
</form>
