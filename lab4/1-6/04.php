<?php
$arr = array();

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(0, 100);
}



$resultArray = swapMinMax($arr);

printWithColor($arr);
printWithColor($resultArray);


function printWithColor($array)
{
    foreach ($array as $num) {
        switch ($num) {
            case min($array):
                echo "<b><span Style = 'color:blue'>$num </span></b>";
                break;
            case max($array):
                echo "<b><span Style = 'color:red'>$num </span></b>";
                break;
            default:
                echo "$num ";
        }
    }
    echo '<br>';
}

function swapMinMax($array)
{
    $indexOfMax = array_search(max($array), $array);
    $indexOfMin = array_search(min($array), $array);
    $temp = $array[$indexOfMax];
    $array[$indexOfMax] = $array[$indexOfMin];
    $array[$indexOfMin] = $temp;
    return $array;
}


