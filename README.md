```
sudo apt-get install git
git clone https://github.com/yj-test/re.git
```

# 正则表达式

## 体验正则表达式

```php
<?php

$pattern = '/o/';
$subject = 'hello world';
preg_match($pattern,$subject,$matches);
var_dump($matches);
```

## 字符范围

```php
<?php

$pattern = '/[f-p]/';
$subject = 'Welcome to Beijing';
preg_match_all($pattern,$subject,$matches);
echo implode('',$matches[0]);
```

## `^`

```php
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
```

## `$`

```php
<?php

$pattern = '/n$/';
$name = ['neala','ben','johnson','nancy','nitya','thomas','jenna'];
$matches = [];
for ($i=0,$len = count($name);$i<$len;++$i){
    if (preg_match($pattern,$name[$i])) {
        $matches[] = $name[$i];
    }
}
print_r($matches);
```

## `*`,`+`,`?`

```php
<?php
$pattern = '/^[a-zA-Z]+[a-zA-Z0-9]*$/';
$subject = $_POST['name'];
if (!preg_match($pattern,$subject)){
    echo '用户名不合法';
} else {
    echo '用户名合法';
}
```

## `.`

```php
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
```

## `\`

```php
<?php

$pattern = '/tom like \$/';
$subject = 'tom like $';
preg_match($pattern,$subject,$matches);
var_dump($matches);
```