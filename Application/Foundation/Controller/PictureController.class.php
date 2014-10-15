<?php
namespace Foundation\Controller;
use Think\Controller;
use Common\Model\AdvertisementsModel;

class PictureController extends Controller {
    
    public function upload(){
        $entity_type  = I('entity_type');
       
        $upload = new \Think\Upload();                              // 实例化上传类
       
        switch ($entity_type) {
            case 'products':
                $title  = I('title');
                if (empty($title)) mist('标题不能为空!');
                $upload->rootPath = './Public/Uploads/products/';
                break;

            case AdvertisementsModel::INDEX_ADV_TYPE:
                $upload->rootPath = './Public/Uploads/advertisements/';
                break;
            
            default:
                # code...
                break;
        }

        // 上传文件 
        foreach ($_FILES as $key => $value) {
            $temp[0] = $_FILES[$key];
            $upload->saveName = time() . mt_rand(0, 9999);        // 设置文件上传名称
            $info[$key] = $upload->upload($temp);
        }

        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            if ($entity_type == 'products'){
                $data = array(
                    'title'     => $title,
                    'save_path' => '/Public/Uploads/products/' . $info['photo'][0]['savepath'],
                    'save_file' => $info['photo'][0]['savename'],
                    'pubtime'   => time()
                );
                D('Products')->addProducts($data);
            }else if ($entity_type == AdvertisementsModel::INDEX_ADV_TYPE){
                $entity_type = AdvertisementsModel::INDEX_ADV_TYPE;
                D('Advertisements')->addAdvs($entity_type, $info);
            }
            $this->success('上传成功！');
        }
    }
}
?>