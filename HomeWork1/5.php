<?php
$bmv = array (
    'a' => 'model',
    'b' => 'speed',
    'c' => 'doors',
    'd' => 'year'
);
$bmv['a'] = 'X5';
$bmv['b'] = 120;
$bmv['c'] = 5;
$bmv['d'] = 2015;

$toyota = $bmv;
$toyota['a'] = 'RAV4';
$toyota['b'] = 180;
$toyota['c'] = 5;
$toyota['d'] = 2016;

$opel = $bmv;
$opel['a'] = 'Zafira';
$opel['b'] = 195;
$opel['c'] = 5;
$opel['d'] = 2008;

$cars = array (
    'bmv' => $bmv,
    'toyota' => $toyota,
    'opel' => $opel
);

foreach ($cars as $key => $value) {
    echo 'CAR ' . $key . PHP_EOL;
    echo $value['a'] . ' ' . $value['b'] . ' ' . $value['c'] . ' ' . $value['d'];
}
