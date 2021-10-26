<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>09</title>
</head>
<body>
<?php

if(!isset($_REQUEST['age'])){
    ?>
    <form action="" method="get">
        <input type="text" name="age">
        <input type="submit">
    </form>
    <?php
}
?>

<?php
if(isset($_REQUEST['age'])){
    $age = strip_tags($_REQUEST['age']);

    if (filter_var($age, FILTER_VALIDATE_INT, ["options" => ["max_range" => 125], ["min_range" => 0]])){
        echo 'Ваш возраст ' . $age;
    } else {
        echo 'Ваш возраст невозможно идентифицировать';
    }
}
?>
</body>
</html>

