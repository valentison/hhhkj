<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\UserModel;

class UserController extends Controller {
	
	public function login(){
		if (IS_POST){
			$user_name = I('user_name');
			$password  = I('password');

			if (empty($user_name)){
				$this->error('用户名不能为空');
			}

			if (empty($password)){
				$this->error('密码不能为空');
			}

			//前端判断
			$data = D('User')->checkLogin($user_name, md5($password));

			if (($data['status'] == UserModel::USER_NOT_EXISTS) || ($data['status'] == UserModel::USER_PWD_ERROR)) {
				return $this->error('用户名或密码错误');
			}else{
				session('id', $data['id']);
				session('user_name', $user_name);
				session('is_admin', 1);
				succ('登录成功', U('Admin/Index/index'));
			}
		}else{
			$this->display();
		}
	}

	/**
	 * [logout 登出系统]
	 * @return [type] [description]
	 * @author [Vanson] <[2014年10月12日02:29:34]>
	 */
	public function logout(){
		session_destroy();
		succ('', U('Admin/User/login'));
	}
}