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
</head>
<body>
	<div id="login">
		<p><label for="username">用户名：</label><input type="username" id="username" /></p>
		<p><label for="password">密&nbsp;&nbsp;&nbsp;码：</label><input type="password" id="password" /></p>
		<div id="buttons">
			<input type="reset" id="reset" class="easyui-linkbutton" value="重置"/>
			<input type="submit" id="submit" class="easyui-linkbutton" value="提交"/>
		</div>
	</div>
</body>
</html>