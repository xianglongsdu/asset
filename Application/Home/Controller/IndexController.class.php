<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		if (session('userinfo')) {
			$this->display();
		} else {
			$this->redirect('Login/index');
		}
		
    }
}