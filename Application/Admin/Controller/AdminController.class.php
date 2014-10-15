<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
	
	public function _initialize(){
		$current_user = session('id');
		$is_admin     = session('is_admin');

		if (empty($current_user)){
			succ('登录状态失效,请重新登录!', U('Admin/User/login'));
		}

		if ($is_admin != 1){
			succ('非法操作', U('Admin/User/login'));
		}
	}
}