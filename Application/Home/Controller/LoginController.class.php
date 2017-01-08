<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;

class LoginController extends Controller {
	public function index() {
		if (!session('?userinfo')) {
			$this->display();
		} else {
			$this->redirect('Index/index');
		}
	}
	
	public function login() {
			$user = new UserModel();
			if ($user->login(I('username'), I('password')) > 0) {
				echo "true";
			} else {
				echo "false";
			}
	}
	
	public function register() {
		$user = new UserModel();
		return $user->register(I('username'), I('password'), I('email'));
	}
	
	public function logout() {
		session('[destroy]');
		$this->redirect('index');
	}
	
}
