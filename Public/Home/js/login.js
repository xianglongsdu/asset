$(function() {
	$('#login').panel({
		title: '登录',
		width: 300,
		height: 200,
	});
	$('#login_form').form({
		onSubmit: function() {
			alert('hello');
		},
	});
	
	$('#register').panel({
		title: '注册新用户',
		width: 300,
		height: 300,
		closed: true,
		style: {
			'margin-top': -150,		//margin-top一定要加引号！！！
		},
	});
	
	$('#reg').click(function() {
		$('#login').panel('close');
		$('#register').panel('open');
	});
});