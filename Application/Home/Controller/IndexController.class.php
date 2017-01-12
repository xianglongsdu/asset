<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
class IndexController extends Controller {
    public function index(){
		if (session('userinfo')) {
			$user = new UserModel();
			$userinfo = $user->select();
			$this->assign("user", $userinfo);
			$this->display();
		} else {
			$this->redirect('Login/index');
		}	
    }
	
	public function info() {
		$num = I('num');
		$size = I('size');
		$start = $size * ($num - 1);
		$user = new UserModel();
		$userinfo = $user->limit($start, $size)->select();
		$this->assign("user", $userinfo);
		$this->display('index');
	}
}