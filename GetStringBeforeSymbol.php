<?php

/**
  * @source http://stackoverflow.com/questions/1935918/php-substring-extraction-get-the-string-before-the-first-or-the-whole-strin
  *
  */

$arr = explode("/", $string, 2);
$first = $arr[0];

$first = current(explode("/", $string));

?>
