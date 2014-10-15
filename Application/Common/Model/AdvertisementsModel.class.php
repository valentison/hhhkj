<?php
namespace Common\Model;
use Think\Model;
class AdvertisementsModel extends Model {

	const INDEX_ADV_TYPE = 'index_adv_type';	//首页幻灯片

	protected $tableName  = 'advertisements'; 

	protected $fields = array(
		'id', 'entity_type', 'type', 'title', 'content', 'save_path', 'save_file', 'url',
		'_pk' => 'id', '_autoinc' => true
	);

	/**
	 * [getAdvs 获取特定分类的广告]
	 * @param  [type] $entity_type [图片类型]
	 * @return [type]       	   [description]
	 * @author [Vanson] <[2014年10月14日20:41:35]>
	 */
	public function getAdvs($entity_type){
		return $this->field('id, save_path, save_file')->where(array('entity_type' => $entity_type))->select();
	}

	/**
	 * [addAdvs 批量添加广告]
	 * @param [type] $advs [description]
	 * @author [Vanson] <[2014年10月14日20:54:49]>
	 */
	public function addAdvs($entity_type, $info = ''){
		switch ($entity_type) {
			//首页幻灯片
			case self::INDEX_ADV_TYPE:
				$count = count($info);
				for ($i=0; $i < $count; $i++) {
					$key = key($info);
					if (!empty($info[$key][0]['savename'])){
						$data = array(
							'entity_type' => self::INDEX_ADV_TYPE,
							'type'        => $key,
							'save_path'   => '/Public/Uploads/advertisements/' . $info[$key][0]['savepath'],
							'save_file'   => $info[$key][0]['savename']
						);
						//判断数据库中是否已有数据
						$exists = $this->where(array('entity_type' => $data['entity_type'], 'type' => $data['type']))->find();

						if (!$exists['id']) {
							$this->add($data);
						}else{
							//删除旧图片
							del_picture($_SERVER['DOCUMENT_ROOT'] . '/' . $exists['save_path'], $exists['save_file']);
							$data['id'] = $exists['id'];
							$this->save($data);
						}
					}
					
					if ($count - 1 != 0){
						next($info);
					}
				}
				break;
			
			default:
				# code...
				break;
		}

	}
}
?>
