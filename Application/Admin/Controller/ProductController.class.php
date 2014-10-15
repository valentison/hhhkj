<?php
namespace Admin\Controller;
use Think\Controller;

class ProductController extends AdminController {
	
	/**
	 * [index 产品列表]
	 * @return [type] [description]
	 */
	public function index(){
		$page         = I('p', 1);							       // 页码
		$num          = 10; 								       // 显示数量
		$ProductModel = D('Products');

		$products     = $ProductModel->getProucts($page, $num);    // 获取留言内容
		$count        = $ProductModel->getProductsCount();		   // 查询满足要求的总记录数
		$Page         = new \Think\Page($count, $num);             // 实例化分页类 传入总记录数和每页显示的记录数
		
		$Page->setConfig('prev','上一页');
 		$Page->setConfig('next','下一页');
		$Page->setConfig('end','最后一页');

		$show = $Page->show();                          	   	   // 分页显示输出

		$this->page = $show;                        	           // 赋值分页输出
		$this->products = $products;							   // 赋值商品输出
		$this->display();
	}

	/**
	 * [editProduct 编辑商品]
	 * @return [type] [description]
	 */
	public function editProduct(){
		$pid = I('id');
		if (IS_POST){

		}else{
			$this->display();
		}
	}

	/**
	 * [delProduct 删除图片]
	 * @return [type] [description]
	 */
	public function delProduct(){
		$pid = I('id');
		D('Products')->delProduct($pid);
		succ('删除成功', U('Admin/Product/index'));
	}


	/**
	 * [productUpload 图片相关]
	 * @return [type] [description]
	 */
	public function productUpload(){
		$this->display();
	}
}
?>