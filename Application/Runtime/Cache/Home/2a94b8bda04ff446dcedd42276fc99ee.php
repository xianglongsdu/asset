<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>信息管理系统</title>
<script type="text/javascript" src="/asset/Public/easyui/jquery.min.js"></script>
<script type="text/javascript" src="/asset/Public/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/asset/Public/Home/js/index.js"></script>
<link rel="stylesheet" type="text/css" href="/asset/Public/easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="/asset/Public/easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="/asset/Public/Home/css/index.css">
<script type="text/javascript">
	var Think = {
		"INDEX": "/asset/index.php/Home/Index",   /*/asset/index.php/Home/Index必须加引号*/
		"LOGIN": "/asset/index.php/Home" + "/login",
	};
</script>
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
		<ul id="navigator" class="easyui-datalist">
			<li value="用户管理">用户管理</li>
			<li value="合同管理">合同管理</li>
			<li id="asset-mgt" value="固定资产管理">固定资产管理</li>
			<li id="consume-mgt" value="耗材管理">耗材管理</li>
		</ul>
	</div>
	<div id="center" region="center" split="true">
		<div id="container" class="easyui-tabs">
			<div title="用户管理">
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
						<?php if(is_array($user)): foreach($user as $key=>$user): ?><tr>
								<td><?php echo ($user["uid"]); ?></td>
								<td><?php echo ($user["username"]); ?></td>
								<td><?php echo ($user["password"]); ?></td>
								<td><?php echo ($user["email"]); ?></td>	
							</tr><?php endforeach; endif; ?>
					</tbody>
				</table>
			</div>
		</div>
		<div id="toolbar">
			<a href="#" id="user-add" class="easyui-linkbutton" iconCls="icon-add" plain="true">新增</a>
			<a href="#" id="user-edit" class="easyui-linkbutton" iconCls="icon-edit" plain="true">编辑</a>
			<a href="#" id="user-remove" class="easyui-linkbutton" iconCls="icon-remove
			" plain="true">删除</a>
		</div>
	</div>
</div>

<div id="footer"></div>

<div id='user-dialog'>
	<form class="easyui-form" method='post'>
		<p>
			<label for="username">用户名：</label>
			<input id="username" type="text" class="easyui-textbox" />
		</p>
		<p>
			<label for="password">密&nbsp;&nbsp;&nbsp;码：</label>
			<input id="password" type="password" class="easyui-passwordbox" />
		</p>
		<p>
			<label for="email">邮&nbsp;&nbsp;&nbsp;箱：</label>
			<input id="email" type="email" class="easyui-textbox" />
		</p>
		<p>
			<a href="#" class="easyui-linkbutton" iconCls="icon-ok">保存</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-cancel">取消</a>
		</p>
	</form>
</div>

</body>
</html>