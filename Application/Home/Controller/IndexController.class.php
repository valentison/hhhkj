<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
    	$this->display();
    }

    /**
     * [message 提交留言]
     * @return [type] [description]
     */
    public function message(){
    	$name   = I('name');
		$tel    = I('tel');
		$mobile = I('mobile');
		$qq     = I('qq');

		if (empty($name) || empty($tel) || empty($mobile) || empty($qq)) mist('请完整填写信息!');

		$data = array(
			'name'    => $name,
			'tel'     => $tel,
			'mobile'  => $mobile,
			'qq'      => $qq,
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