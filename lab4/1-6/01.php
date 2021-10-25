<?php
$data = $_POST['data'];
if (validate($data)) {
    if ($data < 0){
        $data *= -1;
    }
    $sum = recursive($data);
    echo 'сумма цифр введенного числа: ' . $sum;
}

function recursive($data){
    $num = $data % 10;
    $data -= $num;
    if ($data != 0) {
        $new_data = $data/10;
        return $num + recursive($new_data);
    } else {
        return $num;
    }
}

function validate($data){
    if (!is_numeric($data)) {
        echo 'Программа работает только c числами! Введите число!!!';
        return false;
    }
    if (!filter_var($data, FILTER_VALIDATE_INT)) {
        echo 'Программа работает только с целыми числами! Введите целое число!!!';
        return false;
    }
    return true;
}

