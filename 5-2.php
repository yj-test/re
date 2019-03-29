<?php

$pattern = '/[f-p]/';
$subject = 'Welcome to Beijing';
preg_match_all($pattern,$subject,$matches);
echo implode('',$matches[0]);