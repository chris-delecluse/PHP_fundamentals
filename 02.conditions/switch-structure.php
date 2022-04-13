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
    switch ($note) {
        case 0 :
        case 1 :
        case 2 :
        case 3 :
        case 4 :
            echo $message_below_4;
            break;
        case 5 :
        case 6 :
        case 7 :
        case 8 :
        case 9 :
            echo $message_between_5_and_9;
            break;
        case 10 :
            echo $message_equal_10;
            break;
        case 11 :
        case 12 :
        case 13 :
        case 14 :
            echo $message_11_to_14;
            break;
        case 15 :
        case 16 :
        case 17 :
        case 18 :
            echo $message_15_to_18;
            break;
        case 19 :
        case 20 :
            echo $message_19_20;
            break;
        default:
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
