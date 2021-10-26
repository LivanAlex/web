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
    <p>да<input type="radio" name="php" value="yes" checked="checked"></p>
    <p>нет<input type="radio" name="php" value="no"></p>
    <input type="submit">
</form>

<?php
$php = $_REQUEST['php'];
if (isset($php)) {
    if ($php == 'yes') {
        echo 'Вы знаете PHP';
    } else {
        echo 'Вы не знаете PHP';
    }
}
?>

</body>
</html>
