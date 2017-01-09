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
}