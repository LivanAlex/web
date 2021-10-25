<?php
$digit = $_POST['digit'];
$number = $_POST['number'];

if (validateDigit($digit) && validateNumber($number)) {
    if ($number < 0) {
        $number *= -1;
    }

    $counter = recursive($number, $digit);
    $raz = 'раз';
    if ($counter < 10 || $counter > 20) {
        if (($counter % 10) > 1 && ($counter % 10) < 5) {
            $raz = 'раза';
        }
    }
    echo "цифра $digit в числе $number встречается $counter $raz";
}

function recursive($number, $digit)
{
    if ($number == 0) {
        return 0;
    }
    if (($number % 10) == $digit) {
        $number /= 10;
        return 1 + recursive($number, $digit);
    } else {
        $number /= 10;
        return 0 + recursive($number, $digit);
    }
}

function validateDigit($digit)
{
    $digitRules = array(
        'options' => array(
            'min_range' => 0,
            'max_range' => 9
        ),
    );
    if (!is_numeric($digit)) {
        echo 'Программа работает только c числами! Введите число!!!';
        return false;
    }
    if (!filter_var($digit, FILTER_VALIDATE_INT, $digitRules)) {
        echo 'Первое поле ожидает ввода одной цифры! Введите цифру!!!';
        return false;
    }
    return true;
}

function validateNumber($number)
{
    if (!is_numeric($number)) {
        echo 'Программа работает только c числами! Введите число!!!';
        return false;
    }
    if (!filter_var($number, FILTER_VALIDATE_INT)) {
        echo 'Первое поле ожидает ввода одной цифры! Введите цифру!!!';
        return false;
    }
    return true;
}
