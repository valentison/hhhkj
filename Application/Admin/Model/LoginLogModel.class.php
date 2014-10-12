<?php
namespace Admin\Model;
use Think\Model;
class LoginLogModel extends Model {

	protected $tableName  = 'login_log'; 

	protected $fields = array(
		'id', 'user_id','login_ip', 'login_time',
		'_pk' => 'id', '_autoinc' => true
	);

	/**
	 * [getUserLastLogin 获取用户的上次登录数据]
	 * @param  [type] $user_id [description]
	 * @return [type]          [description]
	 * @author [Vanson] <[2014年10月12日10:48:57]>
	 */
	public function getUserLastLogin($user_id){
		$data  = $this->where(array('user_id' => $user_id))
					  ->order(array('id' => 'desc'))
					  ->select();

		if (empty($data)){							//如果没有数据的话
			return array();
		}else{
			return $data[1];
		}
	}
}
?>