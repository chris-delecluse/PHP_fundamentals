<?php

$name = "Chris";
$age = 32;
$eyesColor = "Brown";
$family = array("Charlotte", "Ludo", "Chris", "Harmo", "Kyllian");

?>

<html lang="en">
<head><title>Hi!</title></head>
<body>
    <p>Hi! My name is <?php echo $name ?></p>
    <p>I am <?php echo $age ?></p>
    <p>My eye are <?php echo $eyesColor ?></p>
    <p>The first person in my family is <?php echo $family[0] ?></p>
    <?php
     for($i = 1; $i < count($family) ; $i++)  { ?>
        <p>The other persons in my family is <?php echo $family[$i] ?></p>
     <?php }
    ?>
</body>
</html>