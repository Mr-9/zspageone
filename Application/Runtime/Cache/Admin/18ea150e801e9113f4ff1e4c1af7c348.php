<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/public/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/public/Public/Admin/css/info-reg.css" />
<title>移动办公自动化系统</title>
</head>

<body>
<div class="title"><h2>信息登记</h2></div>
<form action="" method="post">
	<div class="main">
	    <p class="short-input ue-clear">
	    	<label>姓名：</label>
			<input type="text" name="name" value="<?php echo ($data["name"]); ?>" placeholder="姓名" />
			<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
	    </p>
	    <p class="short-input ue-clear">
	    	<label>电话：</label>
			<input type="text" name="tel" value="<?php echo ($data["tel"]); ?>" placeholder="电话" />
			<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
	    </p>

	    <p class="short-input ue-clear">
	    	<label>所属队列：</label>
	        <input type="text" name="sort" value="<?php echo ($data["sort"]); ?>" placeholder="所属队列" />
	    </p>
	    <p class="short-input ue-clear">
	    	<label>备注：</label>
	        <textarea placeholder="备注" name="remark" ><?php echo ($data["remark"]); ?></textarea>
	    </p>
	</div>
	<div class="btn ue-clear">
		<a href="javascript:;" id="btnsubmit" class="confirm">确定</a>
	    <a href="javascript:;" id="btncancel" class="clear">清空内容</a>
	</div>
</form>
</body>
<script type="text/javascript" src="/public/Public/Admin/js/jquery.js"></script>
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

//表单提交
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