<?php

$myMother = array(
    'firstName' => 'Marie-Claire',
    'lastName' => 'Delecluse',
    'age' => 50,
    'gender' => 'woman',
    'child' => true,
    'shoesSize' => 39.5,
    'country' => 'Belgium',
    'language' => 'French',
    'movies' => array(
        'The Mexican',
        'Eat Pray Love',
        'La famille belier',
        'And many more...'
    ),
    'hobbies' => array(
        'Talk with friends',
        'Music',
        'Movies'
    ),
);

$me = array(
    'firstName' => 'Chris',
    'lastName' => 'Delecluse',
    'age' => 32,
    'gender' => 'man',
    'child' => false,
    'shoesSize' => 46.5,
    'country' => 'Belgium',
    'language' => 'French',
    'movies' => array(
        'Avengers',
        'Captain America',
        'Iron man',
        'Spiderman',
        'And many more...'
    ),
);

$me['hobbies'] = array(
    'Video Games',
    'Coding',
    'Watch movies/series',
    'Music',
    'Animals'
);

$me['hobbies'][] = 'taxidermy';
$me['firstName'] = 'Durand';

echo '<pre>';
print_r("Mother hobbies : " . count($myMother['hobbies']));
print_r(" | My hobbies : " . count($me['hobbies']));
print_r(" | total " . (count($myMother['hobbies']) + count($me['hobbies'])) . " hobbies");
print_r($me);
echo '</pre>';
