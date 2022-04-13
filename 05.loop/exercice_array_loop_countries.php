<?php

$default = "Select here";

$countries = array(
    "Belgium",
    "France",
    "Netherlands",
    "USA",
    "Spain",
    "Turkey",
    "Germany",
    "Canada",
    "Japan",
    "China"
);

$countries_v2 = array(
    'BE' => 'Belgium',
    'FR' => 'France',
    'NL' => 'Netherlands',
    'US' => 'USA',
    'ES' => 'Span',
    'TR' => 'Turkey',
    'DE' => 'Germany',
    'CA' => 'Canada',
    'JP' => 'Japan',
    'CN' => 'China'
);

?>

<form action="exercice_array_loop_countries.php" method="post">
    <label for="countries">Country => </label>
    <select name="countries" id="countries">
        <option value="default"><?php echo $default ?></option>
        <option value="belgium"><?php echo $countries[0] ?></option>
        <option value="france"><?php echo $countries[1] ?></option>
        <option value="holland"><?php echo $countries[2] ?></option>
        <option value="usa"><?php echo $countries[3] ?></option>
        <option value="span"><?php echo $countries[4] ?></option>
        <option value="turkey"><?php echo $countries[5] ?></option>
        <option value="maroc"><?php echo $countries[6] ?></option>
        <option value="canada"><?php echo $countries[7] ?></option>
        <option value="japan"><?php echo $countries[8] ?></option>
        <option value="china"><?php echo $countries[9] ?></option>
    </select>

    <label for="countries_v2">Country V2</label>
    <select name="countries_V2" id="countries_v2">
    <option value="default">
        <?php echo $default ?></option>
        <?php foreach ($countries_v2 as $key => $value) { ?>
            <option value=<?php echo $key ?>
            >
                <?php echo $value ?></option>
        <?php } ?>
    </select>
</form>
