<?php

$web_development = array(
    'fronted' => array(),
    'backend'=> array()
);

$web_development['fronted'][] = 'xhtml';

echo "<pre>";
echo "add xhml";
print_r($web_development);
var_dump($web_development);
echo "</pre>";

$web_development['backend'][] = 'Ruby on Rails';

echo "<pre>";
echo "add ruby";
print_r($web_development);
var_dump($web_development);
echo "</pre>";

$web_development['fronted'][] = 'CSS';

echo "<pre>";
echo "add css";
print_r($web_development);
var_dump($web_development);
echo "</pre>";

$web_development['backend'][] = 'flash';

echo "<pre>";
echo "add flash";
print_r($web_development);
var_dump($web_development);
echo "</pre>";

$web_development['backend'][] = 'Javascript';

echo "<pre>";
echo "add js back";
print_r($web_development);
var_dump($web_development);
echo "</pre>";

$web_development['fronted'][] = 'Javascript';

echo "<pre>";
echo "add js front";
print_r($web_development);
var_dump($web_development);
echo "</pre>";

$web_development['fronted'][0] = 'html';

echo "<pre>";
echo "repace xhtml to html";
print_r($web_development);
var_dump($web_development);
echo "</pre>";

array_splice($web_development['backend'], 1, 1);

echo "<pre>";
echo "remove flash";
print_r($web_development);
var_dump($web_development);
echo "</pre>";
