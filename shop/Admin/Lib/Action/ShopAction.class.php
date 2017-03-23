<?php
class ShopAction extends CommonAction {

    public function index(){
		$shop=M('shop'); 
		$rows=$shop->select();
		$this->assign('rows',$rows);     //查询数据分配到模板
		$this->display();              //必须有对应的模板，它的模板是User/index.html
    }

    public function delete(){
    	$id=$_GET['id'];
    	$shop=M('shop');
    	$num=$shop->delete($id);
    	if($num){
            //跳转页面
    		// $this->success('删除成功！',U('index'));
            $this->redirect('index');
    	}else{
    		$this->error('删除失败！',U('index'));
    	}
    }

    public function delAll(){
        $shop=M('shop');
        $str=join(',',$_POST['del']);
        if($shop->delete($str)){
            $this->success('删除成功！',U('index'));
        }
    }

    public function drop(){
        $id=$_GET['id'];
        $shop=M('shop');
        if($shop->delete($id)){
            echo 1;
        }
    }

    public function insert(){
        $brand_id=$_POST['brand_id'];
        $style_id=$_POST['style_id'];
        $shop=M('shop');
        $shop->create();
        if($shop->add()){
            $this->success('添加成功！',U('index'));
        }
    }

    public function add(){
        $brand=M('brand');  
        $brandrows=$brand->select();
        $this->assign('brandrows',$brandrows);     //查询数据分配到模板
        $style=M('style');
        $stylerows=$style->select();
        $this->assign('stylerows',$stylerows);

        $this->display();      
    }

    public function edit(){
        $id=$_GET['id'];
        $shop=M('shop');
        $row=$shop->find($id);
        $this->assign('row',$row);
        $this->display();
    }

    public function update(){
        $shop=M('shop');
        $shop->create();

        if($shop->save()){
            $this->success('修改成功！',U('index'));
        }
    }

     public function upload(){
            //图片上传设置     
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();
            $upload->maxSize = 3145728;
            $upload->allowExts=array('jpg','gif','png','jpeg');
            $upload->savePath='./Public/upImg/';
            $upload->thumb = true;
            $images=$upload->upload();
            if($images){
                
                $info=$upload->getUploadFileInfo();

                $file=$info[0]['savepath'].$info[0]['savename'];
                $file2=$info[0]['savepath'].'t_'.$info[0]['savename'];

                //制作缩略图
                import('ORG.Util.Image');
                Image::thumb($file,$file2,'',100,100);

                echo $info[0]['savepath'].'t_'.$info[0]['savename'];
           
            }else{
                // $this->error($uploadone->getError());
                echo $upload->getErrorMsg();
            }

        }
    


}