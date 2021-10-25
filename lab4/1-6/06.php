<?php
$num = $_POST['num'];
$message = 'ваша карта: ';
$messageError = 'такой карты нет!';
switch ($num) {
    case 6:
        echo $message . $num;
        break;
    case 7:
        echo $message . $num;
        break;
    case 8:
        echo $message . $num;
        break;
    case 9:
        echo $message . $num;
        break;
    case 10:
        echo $message . $num;
        break;
    case 11:
        echo $message . 'валет';
        break;
    case 12:
        echo $message . 'дама';
        break;
    case 13:
        echo $message . 'король';
        break;
    case 14:
        echo $message . 'туз';
        break;
    default:
        echo $messageError;
}
