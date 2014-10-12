<?php
namespace Common\Model;
use Think\Model;
class BaseUserModel extends Model {
	
	const USER_NOT_EXISTS = 'user_not_exists';
	const USER_PWD_ERROR  = 'user_pwd_error';
	const SUCESS_LOGIN    = 'success';

	protected $tableName  = 'user'; 

	protected $fields = array(
		'id', 'user_name', 'password', 'last_login_ip', 'last_login_time', 'is_admin', 'register_time',
		'_pk' => 'id', '_autoinc' => true
	);

	/**
	 * [checkLogin 检测登录]
	 * @param  [type] $user_name [用户名]
	 * @param  [type] $password  [密码]
	 * @return [type]            [description]
	 * @author [Vanson] <[2014年10月12日02:08:20]>
	 */
	public function checkLogin($user_name, $password){

		$exists = $this->where(array('user_name' => $user_name, 'is_admin' => 1))->find();

		$data   = array();

		if (empty($exists)) {										//用户名不存在
			$data['status'] = $this::USER_NOT_EXISTS;
		}else{
			$data['id'] = $exists['id'];
			if ($password != $exists['password']){					//密码错误
				$data['status'] =  $this::USER_PWD_ERROR;
			}else{
				$temp = array(										//更新用户登录信息
					'id'              => $data['id'],
					'last_login_ip'   => $_SERVER['REMOTE_ADDR'],
					'last_login_time' => time()
				);
				$this->save($temp);
				$data['status'] =  $this::SUCESS_LOGIN;
			}
		}

		return $data;

	}
}
?>