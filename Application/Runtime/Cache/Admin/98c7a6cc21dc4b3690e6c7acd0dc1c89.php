<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php echo ($array[0]); ?>--<?php echo ($array[1]); ?>--<?php echo ($array[2]); ?>--<?php echo ($array[3]); ?>
    <br/>
    <?php echo ($array["0"]); ?>---<?php echo ($array["1"]); ?>---<?php echo ($array["2"]); ?>---<?php echo ($array["3"]); ?>
    <br/><hr>
    <?php echo ($array1[0][0]); ?>----<?php echo ($array1[0][1]); ?>----<?php echo ($array1[0][2]); ?>----<?php echo ($array1[0][3]); ?>
    <br/>
    <?php echo ($array1["1"]["0"]); ?>----<?php echo ($array1["1"]["1"]); ?>----<?php echo ($array1["1"]["2"]); ?>----<?php echo ($array1["1"]["3"]); ?>
    <br/>
    <?php echo ($array1["2"]["0"]); ?>----<?php echo ($array1["2"]["1"]); ?>----<?php echo ($array1["2"]["2"]); ?>----<?php echo ($array1["2"]["3"]); ?>
</body>
</html>