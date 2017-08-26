<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>奇迹课堂招生</title>
<!-- <link rel="stylesheet" href="/public/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/public/Public/Admin/css/info-reg.css" /> -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="/public/Public/Index/css/index.css">
</head>

<body>

    <div id="wrap">

    <div class="jumbotron" style="background:#fff url('/public/Public/Index/img/141718kbuzuly7o860lg0h.jpg') no-repeat center center;background-size:cover;">
        <h1>Hello, world!</h1>
        <p>...</p>
    </div>

	<div class="mess">
		<p class="bg-primary">这里是测试文字
			<br>这里是测试文字
			<br>这里是测试文字
			<br>
		</p>
	</div>

    <form class="form-inline" action="" method="post" id="form-inline">
        <div class="form-group">
            <label for="username">用户名</label>
            <input type="text" class="form-control" id="username" placeholder="张三" name="name">
        </div>
        <div class="form-group">
            <label for="tel">电话</label>
            <input type="text" class="form-control" id="tel" placeholder="13866666666"name="tel">
		</div>
        <div class="form-group">
			<input type="hidden" name="field＿name" value="1"class="form-control" id="sort"name="sort">
		</div>
		<div class="btn ue-clear middle" >
			<div class="btn btn-primary">
				<a href="javascript:;" class="confirm btn-primary">确定</a>
			</div>
			<div class="btn btn-primary">
				<a href="javascript:;" class="clear btn-primary">清空内容</a>
			</div>
		</div>
    </form>
	<div><a class="btn btn-primary btn-tel" href="tel:18688888888">一键拨打电话</a></div>
	<div id="footer">
		<p class="bg-success">版权信息</p>
	</div>
    </div>
</body>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script type="text/javascript" src="/public/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/public/Public/Admin/js/WdatePicker.js"></script> 
<script type="text/javascript">
$(".select-title").on("click",function(){
	$(".select-list").toggle();
	return false;
});
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(".select-title").find("span").text(txt);
});


showRemind('input[type=text], textarea','placeholder');

$(function(){
	$('.confirm').on('click',function(){
		$('form').submit();
	})
	$('.clear').on('click',function(){
		$('form')[0].reset();
	})
})
</script>
</html>