<?php
require_once "constants.php";
echo 'На школьной выставке ' . PICS_COUNT . ' рисунков. ';
echo MARKERS_PICS_COUNT . ' из них выполнены фломастерами, ';
echo PENCILS_PICS_COUNT . ' карандашами, а остальные - красками. ';
echo 'Сколько рисунков, выполненных красками, на школьной выставке?';
echo PHP_EOL . PHP_EOL;
echo 'Решение:' . PHP_EOL;
echo PICS_COUNT . ' - (' . MARKERS_PICS_COUNT . ' + ' . PENCILS_PICS_COUNT . ') = ';

$paintsPicsCount = PICS_COUNT - ( MARKERS_PICS_COUNT + PENCILS_PICS_COUNT); 

echo $paintsPicsCount . PHP_EOL;
echo 'Ответ: ' . $paintsPicsCount . ' рисунков, выполненных красками, ';
echo 'на школьной выставке.';