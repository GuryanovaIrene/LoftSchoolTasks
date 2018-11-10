<?php

$name = 'Гурьянова Ирина';
$age = '40';

echo 'Меня зовут: ' . $name;
echo PHP_EOL . 'Мне ' . $age;

if (($age >= 5 and $age <= 20) or $age % 10 >= 5) {
    echo ' лет';
} elseif ($age % 10 == 1) {
    echo ' год';
} elseif ($age % 10 < 5) {
    echo ' года';
}

echo PHP_EOL . '"!|\\/\'"\\';