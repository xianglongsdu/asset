<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>信息管理系统</title>
<script type="text/javascript" src="/asset/Public/easyui/jquery.min.js"></script>
<script type="text/javascript" src="/asset/Public/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/asset/Public/Home/js/home.js"></script>
<link rel="stylesheet" type="text/css" href="/asset/Public/easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="/asset/Public/easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="/asset/Public/Home/css/home.css">
</head>
<body>

<div id="header">
	<div id="logo">信息管理系统</div>
	
	<div id="user">用户
		<ul>
			<li><a href="<?php echo U('Login/logout');?>">退出</a></li>
		</ul>
	</div>
</div>

<div id="main" class="easyui-layout">
	<div id="west" region="west" split="true" title="导航栏">
		<div id="navigator" class="easyui-accordion">
			<div title="test1"></div>
			<div title="test2"></div>
			<div title="test3"></div>
		
		</div>
	</div>
	<div id="center" region="center" split="true" title="内容">
		<table id="content" class="easyui-datagrid" rownumbers="true" fitColumns="true" toolbar="#toolbar">
			<thead>
				<tr>
					<th field="uid">UID</th>
					<th field="username">用户名</th>
					<th field="password">密码</th>
					<th field="email">邮箱</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1001</td>
					<td>juedi</td>
					<td>juedi</td>
					<td>juedi@163.com</td>
				</tr>
			</tbody>
		</table>
		<div id="toolbar">
			<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true">新增</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true">编辑</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-remove
			" plain="true">删除</a>
		</div>
	</div>
</div>

<div id="footer">
</div>

</body>
</html>