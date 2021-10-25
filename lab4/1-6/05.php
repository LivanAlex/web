<?php
$name = $_POST['name'];
$arrName = explode(' ', $name);
echo $arrName[0] .' '. mb_substr($arrName[1], 0, 1, 'utf-8') . '.'. mb_substr($arrName[2], 0, 1, 'utf-8') . '.';
