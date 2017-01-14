<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
class IndexController extends Controller {
    public function index(){
		if (session('userinfo')) {
			$user = new UserModel();
			$userinfo = $user->limit(0, 10)->select();
			$this->assign("user", $userinfo);
			$this->display();
		} else {
			$this->redirect('Login/index');
		}	
    }
	
	public function info() {
		$num = I('page') ? I('page') : 1;
		$size = I('rows') ? I('rows') : 10;
		$start = $size * ($num - 1);
		$user = new UserModel();
		$count = $user->count();
		if ($num * $size > $count) {
			$size = $count - (($num-1) * $size);
		}
		$userinfo = $user->limit($start, $size)->select();
		
		$result['total'] = $count;
		$result['rows'] = $userinfo;
		echo json_encode($result);
	}
} 