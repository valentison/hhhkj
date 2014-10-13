<?php
namespace Common\Model;
use Think\Model;
class WebsiteInfoModel extends Model {

	protected $tableName  = 'website_info'; 

	protected $fields = array(
		'id', 'title', 'name', 'manager', 'tel', 'fax', 'qq', 'zipcode', 'address', 'introduce', 'adv_1', 'adv_2', 'adv_3',
		'_pk' => 'id', '_autoinc' => true
	);

	/**
	 * [saveInfo 保存网站信息]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 * @author [Vanson] <[2014年10月12日14:16:24]>
	 */
	public function saveInfo($data){
		$exists = $this->where(array('id' => 1))->find();
		
		if (!$exists){
			$this->add($data);
		}else{
			$this->save($data);
		}
	}

	/**
	 * [getWebSiteInfo 获取所有网站信息]
	 * @return [type] [description]
	 * @author [Vanson] <[2014年10月12日14:20:59]>
	 */
	public function getWebSiteInfo(){
		return $this->where(array('id' => 1))->find();
	}
}