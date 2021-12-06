<?php

define('FILENAME', 'input.txt');
$file = file_get_contents(constant('FILENAME'));

$splitString = preg_split('/[\,\s\.\!\?]{1,3}/', $file);
$prunedEvidence = array_filter($splitString);

echo sizeof($prunedEvidence) . "\n";
