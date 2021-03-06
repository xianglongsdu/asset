<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>登录界面</title>
	<script type="text/javascript" src="/asset/Public/easyui/jquery.min.js"></script>
	<script type="text/javascript" src="/asset/Public/easyui/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="/asset/Public/Home/js/login.js"></script>
	<link rel="stylesheet" type="text/css" href="/asset/Public/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="/asset/Public/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/asset/Public/Home/css/login.css">
	<script type="text/javascript">
		var Think = {
				"LOGIN": "/asset/index.php/Home/Login",   /*/asset/index.php/Home/Login必须加引号*/
				"INDEX": "/asset/index.php/Home" + "/Index",
			};
	</script>
</head>
<body>
	<div id="login">
		<form id="login_form" method="post">
			<p>
				<label for="username">用户名：</label><input type="username" name="username" class="username" />
				<a id="reg" href="javascript:void(0);">注册</a>
			</p>
			<p><label for="password">密&nbsp;&nbsp;&nbsp;码：</label><input type="password" name="password" class="password" /></p>
			<div class="buttons">
				<input type="reset" class="easyui-linkbutton reset" value="重置"/>
				<input type="submit" class="easyui-linkbutton submit" value="提交"/>
			</div>
		</form>
	</div>
	
	<div id="register">
		<form id="register_form" method="post">
			<p><label for="username">用户名：</label><input type="username" name="username" class="username" /></p>
			<p><label for="password">密&nbsp;&nbsp;&nbsp;码：</label><input type="password" name="password" class="password" /></p>
			<p><label for="repassword">确认密码：</label><input type="password" name="repassword" class="password" /></p>
			<p><label for="email">Email：</label><input type="email" name="email" class="email" /></p>
			<div class="buttons">
				<input type="reset" class="easyui-linkbutton reset" value="重置"/>
				<input type="submit" class="easyui-linkbutton submit" value="提交"/>
			</div>
		</form>
	</div>
</body>
</html>