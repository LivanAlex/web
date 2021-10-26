<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>08</title>
    <style>
        div {
            text-align: center;
        }

        p {
            display: block;
            text-align: center;
            padding: 5px 0;;
            margin: 0;
        }
        input, textarea{
            width: 200px;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <div>
        <p>Имя:</p>
        <input type="text" name="name">
    </div>
    <div>
        <p>Возраст:</p>
        <input type="text" name="age">
    </div>
    <div>
        <p>Сообщение:</p>
        <textarea name="message"></textarea>
    </div>
    <div>
        <input type="submit" value="Отправить">
    </div>
</form>
<?php
$name = $_POST['name'];
$age = $_POST['age'];
$message = $_POST['message'];


if(isset($name)  && isset($age) && isset($message)){
    if($name == '' || $age == '' ||  $message == ''){
        echo '<p>Введите данные во все поля!</p>';
    } else{
        $name = clean($name);
        $age = clean($age);
        $message = clean($message);
        echo "<p>Привет, $name, $age лет. <br> Твое сообщение: $message</p>";
    }
}


function clean($str = ''){
    $str = trim($str);
    $str = stripslashes($str);
    $str = strip_tags($str);
    $str = htmlspecialchars($str);
    return $str;
}
?>
</body>
</html>



