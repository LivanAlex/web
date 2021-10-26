<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>12</title>
</head>
<body>
<form method="post" action="">
    <p>html
        <input type="hidden" name="html" value="0">
        <input type="checkbox"  name="html" value="html">
    </p>
    <p>css
        <input type="hidden" name="css" value="0">
        <input type="checkbox" name="css" value="css"></p>
    <p>php
        <input type="hidden" name="php" value="0">
        <input type="checkbox" name="php" value="php"></p>
    <p>javascript
        <input type="hidden" name="javascript" value="0">
        <input type="checkbox" name="javascript" value="javascript"></p>

    <input type="submit">
</form>

<?php

$html = $_REQUEST['html'];
$css = $_REQUEST['css'];
$php = $_REQUEST['php'];
$javascript = $_REQUEST['javascript'];
$msg = "Вы знаете: ";


if (isset($html) and isset($css) and isset($php) and isset($javascript)) {
    $languages = array($html, $css, $php, $javascript);
    $nothing = true;
    foreach ($languages as $lang){

        if($lang != '0'){
            $msg = $msg . ' ' .  $lang;
            $nothing = false;
        }
    }
    if(!$nothing){
        echo $msg;
    } else{
        echo 'мда... Джон Сноу и то знает больше';
    }

}

?>

</body>
</html>
