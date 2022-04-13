<?php

$message_below_4 = "This work is really bad. What a dumb kid !";
$message_between_5_and_9 = "This is not sufficient. More studying is required.";
$message_equal_10 = "Barely enough ! ";
$message_11_to_14 = "Not bad !";
$message_15_to_18 = "Bravo, bravissimo !";
$message_19_20 = "Too good to be true : confront the cheater ! ";
$message_error = "Error dumb ! you are out of notes... !";

$note = intval($_GET['note']);

if (isset($_GET['submit'])) {
    if ( $note <= 4 ) {
        echo $message_below_4;
    } else if ( $note >= 5 AND  $note <= 9 ) {
        echo $message_between_5_and_9;
    } else if ( $note == 10 ) {
        echo $message_equal_10;
    } else if ( $note >= 11 AND $note <= 14 ) {
        echo $message_11_to_14;
    } else if ( $note >= 15 AND $note <= 18 ) {
        echo $message_15_to_18;
    } else if ( $note >= 19 AND $note <= 20 ) {
        echo $message_19_20;
    } else {
        echo $message_error;
    }
}

?>

<form action="school_sucks.php" method="get">
    <label for="note">Enter the student note : </label>
    <label>
        <input type="text" name="note">
    </label>

    <input type="submit" name="submit" value="send note">
</form>
