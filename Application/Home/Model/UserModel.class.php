<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model {
	
	public function login($username, $password) {
		$map = array(
			"username"	=>	$username,
		);
		
		if ($userinfo = $this->where($map)->find())
		{
			if ($userinfo['password'] == $password)
			{
				session('userinfo', encrypt($username, $password));
				
				return 1;
			} else {
				return 0;
			}
		} else {
			echo -1;
		}
	}
	
	public function register($username, $password, $email) {
		$data = array(
			"username"	=>	$username,
			"password"	=> 	$password,
			"email"		=> 	$email,
		);
		
		if ($this->create($data)) {
			$this->add($data);
		}
		
	}
}