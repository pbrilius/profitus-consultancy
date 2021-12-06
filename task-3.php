<?php

define('FILENAME', 'array.txt');
define('FILENAME_RESULT', 'array-result.txt');

$file = file_get_contents(constant('FILENAME'));

$array = explode(' ', $file);
sort($array);
file_put_contents(constant('FILENAME_RESULT'),
  $array[sizeof($array) - 1]
  . ' '
  . $array[0]
);
