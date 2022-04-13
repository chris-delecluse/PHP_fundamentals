<?php

if (isset($_GET['submit'])) {
    if ($_GET['genre'] == "man") {
        if (intval($_GET['age']) < 12) {
            if ($_GET['ask-english-speaking'] == "yes") {
                echo "Hello Mister Kiddo !";
            } else {
                echo "Aloha Mister Kiddo !";
            }
        } else if (intval($_GET['age']) > 12 AND intval($_GET['age']) < 18) {
            if ($_GET['ask-english-speaking'] == "yes") {
                echo "Hello Mister Teen !";
            } else {
                echo "Aloha Mister Teen !";
            }
        } else if (intval($_GET['age']) >= 18 AND intval($_GET['age']) <= 115) {
            if ($_GET['ask-english-speaking'] == "yes") {
                echo "Hello Mister Adult !";
            } else {
                echo "Aloha Mister Adult !";
            }
        }
    } else if ($_GET['genre'] == "woman") {
        if (intval($_GET['age']) < 12) {
            if ($_GET['ask-english-speaking'] == "yes") {
                echo "Hello Miss Kiddo !";
            } else {
                echo "Aloha Miss Kiddo !";
            }
        } else if (intval($_GET['age']) > 12 AND intval($_GET['age']) < 18) {
            if ($_GET['ask-english-speaking'] == "yes") {
                echo "Hello Miss Teen !";
            } else {
                echo "Aloha Miss Teen !";
            }
        } else if (intval($_GET['age']) >= 18 AND intval($_GET['age']) <= 115) {
            if ($_GET['ask-english-speaking'] == "yes") {
                echo "Hello Miss Adult !";
            } else {
                echo "Aloha Miss Adult !";
            }
        }
    } else if (intval($_GET['age']) > 115) {
        if ($_GET['ask-english-speaking'] == "yes") {
            echo "Wow ! Still alive ? Are you robot, like me ? Can i hug you ?";
        } else {
            echo "Wow ! Still alive ? Are you robot, like me ? Can i hug you ?";
        }
    } else {
        echo "Error, i dont know why...";
    }
}

?>

<form method="get" action="age_genre_language.php">
    <label for="age">Can you put you age ? </label>
    <label>
        <input type="text" name="age">
    </label>
    <label for="genre">
        What is your genre ?
        <label>
            <input type="radio" name="genre" value="man">
            man
        </label>
        <label>
            <input type="radio" name="genre" value="woman">
            woman
        </label>
    </label>
    <label for="ask-english-speaking">
        Do you speak English ?
        <label>
            <input type="radio" name="ask-english-speaking" value="yes">
            yes
        </label>
        <label>
            <input type="radio" name="ask-english-speaking" value="no">
            no
        </label>
    </label>

    <input type="submit" name="submit" value="Greet me now">
</form>
