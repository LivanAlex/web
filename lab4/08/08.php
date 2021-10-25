<?php
$name = $_POST['name'];
$age = $_POST['age'];
$message = $_POST['message'];

$name = clean($name);
$age = clean($age);
$message = clean($message);

echo "Привет, $name, $age лет. <br> Твое сообщение: $message";


function clean($str = ''){
    $str = trim($str);
    $str = stripslashes($str);
    $str = strip_tags($str);
    $str = htmlspecialchars($str);
    return $str;
}