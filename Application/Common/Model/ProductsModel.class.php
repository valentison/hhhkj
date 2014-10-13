<?php
namespace Common\Model;
use Think\Model;
class ProductsModel extends Model {
	
	protected $tableName  = 'products'; 

	protected $fields = array(
		'id', 'title', 'picture', 'pubtime',
		'_pk' => 'id', '_autoinc' => true
	);

	/**
	 * [addProducts 添加商品]
	 * @param [type] $data [description]
	 * @author [Vanson] <[2014年10月12日19:10:59]>
	 */
	public function addProducts($data){
		return $this->add($data);
	}

	/**
	 * [getProucts 获取所有商品]
	 * @return [type] [description]
	 * @author [Vanson] <[2014年10月12日21:53:46]>
	 */
	public function getProucts($page, $num){
		return $this->order(array('id' => 'desc'))->page($page . ',' . $num)->select();
	}

	/**
	 * [getProductsCount 获取商品总数]
	 * @return [type] [description]
	 * @author [Vanson] <[2014年10月12日21:53:57]>
	 */
	public function getProductsCount(){
		return $this->count();
	}

	/**
	 * [delProduct 删除商品]
	 * @return [type] 	  [description]
	 * @param  [Interger] [商品ID]
	 * @author [Vanson] <[2014年10月12日22:09:25]>
	 */
	public function delProduct($pid){
		$this->where(array('id' => $pid))->delete();
	}
}
?>