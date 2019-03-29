<?php

$pattern = '/o/';
$subject = 'hello world';
preg_match($pattern,$subject,$matches);
var_dump($matches);
