<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(is_array($array)): $i = 0; $__LIST__ = $array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; echo ($vol); ?>-<?php endforeach; endif; else: echo "" ;endif; ?>
<hr>
    <?php if(is_array($array)): foreach($array as $key=>$for): echo ($for); ?>-<?php endforeach; endif; ?>
<hr>
    <?php if(is_array($array2)): $i = 0; $__LIST__ = $array2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(is_array($vol)): $i = 0; $__LIST__ = $vol;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo); ?>-<?php endforeach; endif; else: echo "" ;endif; ?>
        <br><?php endforeach; endif; else: echo "" ;endif; ?>
<hr>

    <?php if(is_array($array2)): foreach($array2 as $key=>$for): echo ($for[0]); ?>--<?php echo ($for[1]); ?>--<?php echo ($for[2]); ?>--<?php echo ($for[3]); ?>
        <br><?php endforeach; endif; ?>
    <hr>
    <?php echo ($array2[0][0]); ?>
</body>
</html>