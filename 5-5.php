<?php
$pattern = '/^[a-zA-Z]+[a-zA-Z0-9]*$/';
$subject = $_POST['name'];
if (!preg_match($pattern,$subject)){
    echo '用户名不合法';
} else {
    echo '用户名合法';
}