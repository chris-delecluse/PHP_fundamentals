<?php

$result = "";

$excuse_illness = " of illness, she was vomiting all night so I recommended a day of rest. We have the proof from the doctor that we will send to you as soon as he returns to school.";
$excuse_death = " a member of my family passed away";
$excuse_extra_curricular = " : has other more interesting things to do...";
$excuse_transport_issues = " of public transport still on strike";

$error = "Error...";

if (isset($_POST['submit'])) {

    $result = "Dear " . $_POST['teacher'];

    if ($_POST['gender'] == "man") {
        $result = $result . ", my son ";
    } else if ($_POST['gender'] == "woman") {
        $result = $result . ", my daughter ";
    } else {
        echo $error;
    }

    $result = $result . $_POST['name'] . " did not come to court today because";

    if ($_POST['reason'] == "illness") {
        $result = $result . " " . $excuse_illness;
    } else if ($_POST['reason'] == "death") {
        $result = $result . " " . $excuse_death;
    } else if ($_POST['reason'] == "extra-curricular") {
        $result = $result . " " . $excuse_extra_curricular;
    } else if ($_POST['reason'] == "mobility") {
        $result = $result . " " . $excuse_transport_issues;
    } else if ($_POST['reason'] == "default") {
        $result = "";
    } else {
        echo $error;
    }

    echo "<p class='text'>$result</p>";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Excuse</title>
</head>
<body>
<div class="container">
    <form action="excuse.php" method="post">
        <label class="teacherName">
            <p>teacher name</p>
            <input class="inputText" type="text" name="teacher" required>
        </label>
        <div class="gender">
            <label class="studentName">
                <p>student name</p>
                <input class="inputText" type="text" name="name" required>
            </label>
            <label for="gender" id="gender"></label>
            <ul>
                <li>
                    <label>
                        <input type="radio" name="gender" value="man">
                        man
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="gender" value="woman">
                        woman
                    </label>
                </li>
            </ul>
        </div>
        <label class="reason-select">
            <select name="reason" class="selector">
                <option value="default">--> select reason here <--</option>
                <option value="illness">Illness</option>
                <option value="death">Death of the pet (or a family member)</option>
                <option value="extra-curricular">Significant extra-curricular activity</option>
                <option value="mobility">Transport issues</option>
            </select>
        </label>
        <input class="button" type="submit" name="submit" value="send form">
    </form>
</div>
</body>
</html>
