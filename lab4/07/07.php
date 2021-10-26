<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>07</title>
</head>
<body>
<form action="" method="post">
    <input name="name" type="text">
    <input type="submit" value="Отправить">
</form>
<?php
$name = $_POST['name'];
if(isset($name))
echo 'Привет, ' . $name;
?>
</body>
</html>



