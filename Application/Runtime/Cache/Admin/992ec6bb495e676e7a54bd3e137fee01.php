<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 姓名：<?php echo ((isset($sign) && ($sign !== ""))?($sign):'<span style="color:#B1A6A6">什么都没有</span>'); ?> -->
    姓名：<?php echo ($sign); ?>
</body>
</html>