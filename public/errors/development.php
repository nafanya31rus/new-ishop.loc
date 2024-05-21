<?php

/**
 * @var $errno \wfm\ErrorHandler
 * @var $errstr \wfm\ErrorHandler
 * @var $errfile \wfm\ErrorHandler
 * @var $errline \wfm\ErrorHandler
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ошибка</title>
</head>
<body>
<h1>Произошла ошибка</h1>
<p><b>Код ошибки: <?= $errno ?></b></p>
<p><b>Текст ошибки: <?= $errstr ?></b></p>
<p><b>Файл, в котором произошла ошибка: <?= $errfile ?></b></p>
<p><b>Строка, в которой произошла ошибка: <?= $errline ?></b></p>
</body>
</html>
