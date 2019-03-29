<?php

$pattern = '/^n/';
$name = ['neala','ben','johnson','nancy','nitya','thomas','jenna'];
$matches = [];
for ($i=0,$len = count($name);$i<$len;++$i){
    if (preg_match($pattern,$name[$i])) {
        $matches[] = $name[$i];
    }
}
print_r($matches);