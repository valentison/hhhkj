<?php
namespace Foundation\Controller;
use Think\Controller;

class PictureController extends Controller {
    
    public function upload(){
        $title = I('title');
        $type  = I('type');
        $num   = I('num');
        if ($type == 'products'){
            if (empty($title)) mist('标题不能为空!');
        }
        $upload = new \Think\Upload();                              // 实例化上传类
        $upload->maxSize  = 3145728 ;                               // 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');         // 设置附件上传类型
        $upload->saveName = time() . '_' . mt_rand(0, 9999);        // 设置文件上传名称
        $upload->rootPath = './Public/Uploads/';                    // 设置附件上传根目录
        $upload->savePath = '';                                     // 设置附件上传（子）目录

        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            if ($type == 'products'){
                $data = array(
                    'title'   => $title,
                    'picture' => $info['photo']['savepath'].$info['photo']['savename'],
                    'pubtime' => time()
                );
                D('Products')->addProducts($data);
            }else if ($type == 'advertise'){
                $data = array(
                    'id'        => 1,
                    'adv_'.$num => $info['photo'.$num]['savepath'].$info['photo'.$num]['savename']
                );
                D('WebsiteInfo')->saveInfo($data);
            }
            $this->success('上传成功！');
        }
    }
}
?>