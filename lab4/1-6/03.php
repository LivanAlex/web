<?php
$start = $_POST['start'];
$end = $_POST['end'];
if (validate($start, $end)) {
    $result = 0;
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 5 == 0) {
            $result += $i;
        }
    }

    echo "в диапазоне от $start до $end сумма чисел делящихся на 5 без остатка равна $result";
}

function validate($start, $end)
{
    if (!is_numeric($start) || !is_numeric($end)) {
        echo 'Программа работает только c числами! Введите число!!!';
        return false;
    }
    if (!filter_var($start, FILTER_VALIDATE_INT) || !filter_var($end, FILTER_VALIDATE_INT)) {
        echo 'Программа работает только с целыми числами! Введите целое число!!!';
        return false;
    }

    if ($start > $end) {
        echo 'первое число должно быть меньше вторго';
        return false;
    }

    return true;
}
