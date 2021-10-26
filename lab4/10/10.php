<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>10</title>
    <style>
        .content{
            text-align: center;
        }
        .input{
            display: block;
            margin: 0 auto 5px;

        }
    </style>
</head>
<body>
<div class="content">
    <form action="10.php" method="post">
        <input class="input" type="text" name="login">
        <input class="input" type="password" name="password">
        <input type="submit" value="Войти">
    </form>
</div>

<?php
$userLogin = $_REQUEST['login'];
$userPassword = $_REQUEST['password'];

if(isset($userLogin) && isset($userPassword)){
    $userLogin = trim($userLogin);
    $userPassword = trim($userPassword);
    $file = fopen('security.txt', 'r') or die('не удалось открыть файл');
    $success = false;
    while (!feof($file)) {
        $str = htmlentities(fgets($file));
        $loginPassword = explode(' ', $str);
        $loginPassword[1] = trim($loginPassword[1]);

        if ($userLogin == $loginPassword[0] && $userPassword == $loginPassword[1]){
            echo '<p style="text-align: center">Доступ разрешен!</p>';
            $success = true;
            break;
        }
    }
    if(!$success){
        echo '<p style="text-align: center">Доступ запрещен!</p>';
    }
    fclose($file);
}
?>
</body>
</html>




