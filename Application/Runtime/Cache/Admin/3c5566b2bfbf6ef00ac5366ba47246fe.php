<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/public/Public/Admin/css/base.css" />
	<link rel="stylesheet" href="/public/Public/Admin/css/login.css" />
	<title>奇迹课堂后台</title>
</head>
<body>
	<div id="container">
		 <!-- <form action="" method="post">  -->
		 <form action="<?php echo U('checkLogin');?>" method="post"> 
		<div id="bd">
			<div class="login1">
            	<div class="login-top"><h1 class="logo"></h1></div>
                <div class="login-input">
                	<p class="user ue-clear">
                    	<label>用户名</label>
                        <input type="text" name="username" />
                    </p>
                    <p class="password ue-clear">
                    	<label>密&nbsp;&nbsp;&nbsp;码</label>
                        <input type="password" name="password"/>
                    </p>
                     <p class="yzm ue-clear">
                    	<label>验证码</label>
                        <input type="text" name="captcha" maxlength='4'/>
                         <cite><img src="/public/index.php/Admin/Public/captcha/" alt="" style="display:block;left:-68px;top:4px;position:absolute;border-radius:4px;width:80px;background:#F3FBFE" onclick="this.src='/public/index.php/Admin/Public/captcha/T/'+Math.random()"></cite> 
                    </p> 
                </div>
                <div class="login-btn ue-clear">
                	<a href="javascript:;" class="btn">登录</a>
                    <div class="remember ue-clear">
                    	<input type="checkbox" id="remember" />
                        <em></em>
                        <label for="remember">记住密码</label>
                    </div>
                </div>
            </div>
		</div>
		</form>
	</div>
    <div id="ft">CopyRight&nbsp;2017&nbsp;&nbsp;版权所有&nbsp;&nbsp;qijiketang.com&nbsp;&nbsp;ICP备00000000号</div>
</body>
<script type="text/javascript" src="/public/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/Public/Admin/js/common.js"></script>
<script type="text/javascript">
var height = $(window).height();
$("#container").height(height);
$("#bd").css("padding-top",height/2 - $("#bd").height()/2);

$(window).resize(function(){
	var height = $(window).height();
	$("#bd").css("padding-top",$(window).height()/2 - $("#bd").height()/2);
	$("#container").height(height);
	
});

$('#remember').focus(function(){
   $(this).blur();
});

$('#remember').click(function(e) {
	checkRemember($(this));
});

function checkRemember($this){
	if(!-[1,]){
		 if($this.prop("checked")){
			$this.parent().addClass('checked');
		}else{
			$this.parent().removeClass('checked');
		}
	}
}

//登录
$(function(){
	//给登录按钮绑定点击事件
	$('.btn').on('click',function(){
		//事件处理程序
		$('form').submit();
		
	})
})
</script>
</html>