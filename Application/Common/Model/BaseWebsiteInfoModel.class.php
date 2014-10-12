<?php
namespace Common\Model;
use Think\Model;
class BaseWebsiteInfoModel extends Model {

	const TYPE_TITLE     = 'title';    		     //网站标题
	const TYPE_NAME      = 'name';     		     //公司名称
	const TYPE_MANAGER   = 'manager';  		     //主管名称
	const TYPE_TEL       = 'tel';      		     //联系电话
	const TYPE_FAX       = 'fax';     		     //传真号码
	const TYPE_QQ        = 'qq'; 				 //QQ号码
	const TYPE_ZIPCODE   = 'zipcode';  		     //邮编
	const TYPE_ADDRESS   = 'address';  		     //厂址
	const TYPE_INTRODUCE = 'introduce';		     //公司简介

	protected $tableName  = 'website_info'; 

	protected $fields = array(
		'id', 'type','value',
		'_pk' => 'id', '_autoinc' => true
	);

	/**
	 * [saveInfo 保存网站信息]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 * @author [Vanson] <[2014年10月12日14:16:24]>
	 */
	public function saveInfo($data){
		foreach ($data as $k => $v) {
			//检测是否存在
			$exists = $this->where(array('type' => $k))->getField('id');

			if ($exists) {
				$temp = array(
					'id'    => $exists,
					'value' => $v
				);
				$this->save($temp);
			}else{
				$temp = array(
					'type'  => $k,
					'value' => $v
				);
				$this->add($temp);
			}
		}
	}

	/**
	 * [getAllInfo 获取所有网站信息]
	 * @return [type] [description]
	 * @author [Vanson] <[2014年10月12日14:20:59]>
	 */
	public function getAllInfo(){
		return $this->field('value')->select();
	}
}