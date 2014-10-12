<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
    	$web_info     = D('WebsiteInfo')->getAllInfo(); 			// 获取网站信息
		$ProductModel = D('Products');

		$page     = I('p', 1);							            // 页码
		$num      = 20; 								            // 显示数量
		$products = $ProductModel->getProucts($page, $num);         // 获取留言内容
		$count    = $ProductModel->getProductsCount();		        // 查询满足要求的总记录数
		$Page     = new \Think\Page($count, $num);                  // 实例化分页类 传入总记录数和每页显示的记录数
		
		$Page->setConfig('prev','上一页');
 		$Page->setConfig('next','下一页');
		$Page->setConfig('end','最后一页');

		$show = $Page->show();                          	   	    // 分页显示输出
		$this->page      = $show;                        	        // 赋值分页输出
    	$this->products  = $products;			                    // 商品信息
    	$this->web_infos = $web_info;			                    // 网站相关信息
    	$this->display();
    }

    /**
     * [message 提交留言]
     * @return [type] [description]
     */
    public function message(){
    	$name    = I('name');
		$mobile  = I('mobile');
		$qq      = I('qq');
		$content = I('content');

		if (empty($name) || empty($mobile) || empty($qq) || empty($content)) mist('请完整填写信息!');

		$data = array(
			'name'    => $name,
			'mobile'  => $mobile,
			'qq'      => $qq,
			'content' => $content,
			'pubtime' => time()
		);
	
		$status = D('Message')->add($data);

		if ($status){
			succ('提交成功', U('Home/Index/index'));
		}else{
			succ('提交失败', U('Home/Index/index'));
		}
    }
}