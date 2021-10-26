<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>15</title>
</head>
<body>
<form method="post" action="">
    <select name="age" id="1" size="5">
        <option disabled>Сколько вам лет?</option>
        <option value="1">менее 20 лет</option>
        <option value="2">20-25</option>
        <option value="3">26-30</option>
        <option value="4">более 30</option>
    </select>
    <input type="submit">
</form>

<?php
$age = $_REQUEST['age'];
if (isset($age)) {
    $msg1 = 'Вам менее 20 лет';
    $msg2 = 'Вам 20-25 лет';
    $msg3 = 'Вам 26-30 лет';
    $msg4 = 'Вам более 30 лет';

    switch ($age){
        case 1:
            echo $msg1;
            break;
        case 2:
            echo $msg2;
            break;
        case 3:
            echo $msg3;
            break;
        case 4:
            echo $msg4;
            break;
    }
}
?>

</body>
</html>
