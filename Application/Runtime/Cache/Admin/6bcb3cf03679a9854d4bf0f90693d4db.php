<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php echo ($_SERVER['PATH']); ?><hr/>
    <?php echo ($_GET['id']); ?><hr/>
    <?php echo (cookie('PHPSESSID')); ?><hr/>
    <?php echo (C("DEFAULT_MODULE")); ?>
</body>
</html>