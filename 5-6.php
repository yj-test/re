<?php
$pattern = '/.*/';
$subject = ['*&^%dicn134ich?/-d+',"[你好]\nbeijing",'sic(d89+--_)kecia~'];
$matches = [];
for ($i=0,$len = count($name);$i<$len;++$i){
    if (preg_match($pattern,$name[$i])) {
        $matches[] = $subject[$i];
    }
}
print_r($matches);