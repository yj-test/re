<?php

$pattern = '/tom like \$/';
$subject = 'tom like $';
preg_match($pattern,$subject,$matches);
var_dump($matches);