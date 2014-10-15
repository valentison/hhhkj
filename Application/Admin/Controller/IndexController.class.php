<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends AdminController {

	/**
	 * [index 欢迎页]
	 * @return [type] [description]
	 */
	public function index(){
		$this->display();
	}

	/**
	 * [forum 留言板]
	 * @return [type] [description]
	 */
	public function forum(){
		//获取留言信息
		$page         = I('p', 1);							       // 页码
		$num          = 10; 								       // 显示数量
		$MessageModel = D('Message');

		$messages     = $MessageModel->get_message($page, $num);   // 获取留言内容
		$count        = $MessageModel->get_message_count();		   // 查询满足要求的总记录数
		$Page         = new \Think\Page($count, $num);             // 实例化分页类 传入总记录数和每页显示的记录数

		$Page->setConfig('prev','上一页');
 		$Page->setConfig('next','下一页');
		$Page->setConfig('end','最后一页');

		$show = $Page->show();                          	   	   // 分页显示输出
		$this->page = $show;                        	           // 赋值分页输出
		$this->messages = $messages;
		$this->display();
	}

	/**
	 * [delMsg 删除留言]
	 * @return [type] [description]
	 */
	public function delMsg(){
		$mid = I('id');
		if (!empty($mid)){
			D('Message')->delete_message($mid);
			succ('删除成功!', U('Admin/Index/forum'));
		}
	}

	/**
	 * [info 欢迎内页]
	 * @return [type] [description]
	 */
	public function info(){
		$user_id    = session('id');
		$user_info  = D('User')->where(array('id' => $user_id))->find();	//获取用户基本信息
		$last_login = D('LoginLog')->getUserLastLogin($user_id);			//上次登录信息

		$this->last_login = $last_login;
		$this->user_info  = $user_info;
		$this->display();
	}

	/**
	 * [introduce 网站信息]
	 * @return [type] [description]
	 */
	public function introduce(){
		if (IS_POST){
			$data = array(
				'id'		=> 1,
				'title'     => I('title'),
				'name'      => I('name'),
				'manager'   => I('manager'),
				'tel'       => I('tel'),
				'fax'       => I('fax'),
				'qq'        => I('qq'),
				'zipcode'   => I('zipcode'),
				'address'   => I('address'),
				'introduce' => I('introduce')
				);
			D('WebsiteInfo')->saveInfo($data);
			succ('修改成功', U('Admin/Index/introduce'));
		}else{
			$info = D('WebsiteInfo')->getWebSiteInfo();
			$this->info = $info;
			$this->display();
		}
	}

	/**
	 * [changePwd 更改密码]
	 * @return [type] [description]
	 */
	public function changePwd(){
		if (IS_POST){
			$password         = md5(I('password'));		//原始密码
			$new_password     = I('new_password');		//新密码
			$confirm_password = I('confirm_password');	//确认密码

			if (empty($password) || empty($new_password) || empty($confirm_password)) $this->error('密码不能为空!');

			$UserModel = D('User');

			$user_id = session('id');
			$user_info = $UserModel->where(array('id' => $user_id))->find();

			if ($user_info['password'] != $password) $this->error('原始密码输入错误!');
			if ($new_password != $confirm_password) $this->error('两次密码输入不相同!');

			$data = array(
				'id'       => $user_id,
				'password' => md5($new_password)
				);

			$status = $UserModel->save($data);

			if ($status){
				succ('修改成功', U('Admin/Index/changePwd'));
			}else{
				succ('密码不能相同', U('Admin/Index/changePwd'));
			}

		}else{
			$this->display('pass');
		}
	}

	/**
	 * [indexAdv 首页幻灯片]
	 * @return [type] [description]
	 */
	public function indexAdv(){
		$this->display();
	}

	/**
	 * [del_runtime 删除缓存]
	 * @return [type] [description]
	 */
	public function del_runtime(){
		$path = $_SERVER['DOCUMENT_ROOT'].'/Application/Runtime/';
		//如果php文件不是ANSI,而是UTF-8模式,而且要删除的文件夹中包含汉字字符的话,调用函数前需要转码
		//$path=iconv( 'utf-8', 'gb2312',$path );
		my_del($path);
		echo '删除缓存成功!';	//   <br />已清除 ',$path,' 目录下的所有文件!' 调试模式再开启查看路径
	}
}