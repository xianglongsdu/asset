$(function() {
	$('#login').panel({
		title: '登录',
		width: 300,
		height: 200,
		style: {
			'position': 'relative',		//position一定要加引号！！！
			'top': '50%',
			'margin': '-100px auto',
		}
	});
	$('#login_form').form({
		url: Think['LOGIN'] + '/login',
		success: function(data) {
			if (data == "true") {
				location.href = Think['INDEX'] + '/index';
			} else {
				$.messager.alert('信息', '用户名或密码错误','error');
			}
		},
	});
	
	$('#register').panel({
		title: '注册新用户',
		width: 300,
		height: 300,
		closed: true,
		style: {
			'position': 'relative',
			'top': '50%',
			'margin': '-150px auto',		
		},
	});
	
	$('#register_form').form({
		url: Think['LOGIN'] + '/register',
		success: function() {
			$('#register_form').form('clear');
			$('#register').panel('close');
			$('#login').panel('open');
			$.messager.alert('信息', '注册成功', 'info');
		},
	});
	
	$('#reg').click(function() {
		$('#login').panel('close');
		$('#register').panel('open');
	});
});