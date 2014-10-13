<?php
namespace Common\Model;
use Think\Model;
class MessageModel extends Model {
	
	protected $tableName  = 'message'; 

	protected $fields = array(
		'id', 'name', 'mobile', 'qq', 'content', 'pubtime',
		'_pk' => 'id', '_autoinc' => true
	);

	/**
	 * [get_message 获取所有评论]
	 * @return [type] [description]
	 * @author [Vanson] <[2014年10月12日15:43:30]>
	 */
	public function get_message($page, $num){
		return $this->order(array('id' => 'desc'))->page($page . ',' . $num)->select();
	}

	/**
	 * [get_message_count 获取所有评论]
	 * @return [type] [description]
	 * @author [Vanson] <[2014年10月12日15:43:30]>
	 */
	public function get_message_count(){
		return $this->order(array('id' => 'desc'))->count();
	}

	/**
	 * [delete_message 删除留言]
	 * @param  [type] $mid [留言ID]
	 * @return [type]      [description]
	 * @author [Vanson] <[2014年10月12日15:43:03]>
	 */
	public function delete_message($mid){
		return $this->where(array('id' => $mid))->delete();
	}
}
?>
