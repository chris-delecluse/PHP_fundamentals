<?php

$pupil = array(
    'name' => $_POST['name'],
    'gender' => $_POST['gender'],
    'teacher_name' => $_POST['teacher-name'],
);

$result = "";

$excuse_illness = " de maladie.";
$excuse_death = " , un membre de ma famille est décédé";
$excuse_extra_curricular = ", est allé à la piscine.";
$excuse_transport_issues = ", les transports en commun sont en grève";

$submit = $_POST['submit'];
$get_name = $_POST['name'];
$get_gender = $_POST['gender'];
$get_reason = $_POST['reason'];

$error = "Error...";

if (isset($submit)) {
    if ($get_gender == "man") {
        $result = "Mon fils ";
    } else if ($get_gender == "woman") {
        $result = "Ma fille ";
    } else {
        echo $error;
    }

    $result = $result . $pupil['name'] . " n'est pas venu aujourd'hui en cour pour cause";

    if ($get_reason == "illness") {
        $result = $result . " " . $excuse_illness;
    } else if ($get_reason == "death") {
        $result = $result . " " . $excuse_death;
    } else if ($get_reason == "extra-curricular") {
        $result = $result . " " . $excuse_extra_curricular;
    } else if ($get_reason == "mobility") {
        $result = $result . " " . $excuse_transport_issues;
    } else if ($get_reason == "default") {
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
