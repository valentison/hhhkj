<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends AdminController {

	public function index(){
		$this->display();
	}

	public function info(){
		$user_id   = session('id');
		$user_info = D('User')->where(array('id' => $user_id))->find();	//获取用户基本信息
		$this->user_info = $user_info;
		$this->display();
	}
}