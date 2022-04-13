<?php

$human_url = "https://giphy.com/embed/gk8kQjmYPo6mUCZWUJ";
$cat_url = "https://giphy.com/embed/3oriO0OEd9QIDdllqo";
$unicorn_url = "https://giphy.com/embed/lN1MTl03Qls145LJ3w";

$url = ($_POST['origin'] == "human") ? $url = $human_url :
            (($_POST['origin'] == "cat") ? $url = $cat_url :
                (($_POST['origin'] == "unicorn") ? $url = $unicorn_url : ""));

echo (isset($_POST['submit']))
        ? ($_POST['origin']) ? "<iframe src='$url' width='384' allowFullScreen></iframe>" : ""
    : "";

?>

<form action="unicorn.php" method="post">
    <label for="origin">Are you ? (choose inside the list)</label>
    <label>
        <select name="origin">
            <option value="human">human ?</option>
            <option value="cat">cat ?</option>
            <option value="unicorn">unicorn ?</option>
        </select>
    </label>

    <input type="submit" name="submit" value="sub your choice">
</form>
