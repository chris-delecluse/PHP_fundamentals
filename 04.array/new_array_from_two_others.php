<?php

$me = array(
    'name' => 'Chris',
    'age' => 32,
    'gender' => 'men',
    'hair' => 'black',
    'eyes'=> 'brown',
    'country' => 'Belgium',
    'hobbies' => array(
        'watch series/movies',
        'animals',
        'coding',
        'video games',
        'music',
        'sport'
    )
);

$soulmate = array(
    'name' => 'Mathilde',
    'age' => 30,
    'gender' => 'women',
    'hair' => 'redhead',
    'eyes'=> 'green',
    'country' => 'Belgium',
    'hobbies' => array(
        'singing',
        'playing an instrument',
        'reading',
        'video games',
        'music'
    )
);

$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $me['hobbies']);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';
