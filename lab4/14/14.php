<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>13</title>
</head>
<body>
<p>Вы знаете PHP?</p>
<form method="post" action="">
    <p>менее 20 лет<input type="radio" name="age" value="1"></p>
    <p>20-25<input type="radio" name="age" value="2"></p>
    <p>26-30<input type="radio" name="age" value="3"></p>
    <p>более 30<input type="radio" name="age" value="4"></p>
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
