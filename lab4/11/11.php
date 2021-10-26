<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>11</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="name">
    <input type="hidden" name="check" value="0">
    <input type="checkbox" name="check" value="1">
    <input type="submit">
</form>

<?php
if (isset($_REQUEST['check']) and $_REQUEST['check'] == 0) {
    echo 'Пока, ' . $_REQUEST['name'];
}
if (isset($_REQUEST['check']) and $_REQUEST['check'] == 1) {
    echo  'Привет, ' . $_REQUEST['name'];
} ?>

</body>
</html>

