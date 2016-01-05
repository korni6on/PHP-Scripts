<?php
if(($key = array_search($value, $array)) !== false) {
    unset($array[$key]);
}
?>
