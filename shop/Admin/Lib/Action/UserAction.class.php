<?php
class UserAction extends Action {

    public function index(){
		$user=M('user');  //实例化user对象
		$rows=$user->select();
		$this->assign('rows',$rows);     //查询数据分配到模板
		$this->display();              //必须有对应的模板，它的模板是User/index.html
    }

    public function delete(){
    	$id=$_GET['id'];
    	$user=M('user');
    	$num=$user->delete($id);
    	if($num){
            //跳转页面
    		// $this->success('删除成功！',U('index'));
            $this->redirect('index');
    	}else{
    		$this->error('删除失败！',U('index'));
    	}
    }

    public function delAll(){
        $user=M('user');
        $str=join(',',$_POST['del']);
        if($user->delete($str)){
            $this->success('删除成功！',U('index'));
        }
    }

    public function drop(){
        $id=$_GET['id'];
        $user=M('user');
        if($user->delete($id)){
            echo 1;
        }
    }

    public function insert(){
        var_dump($_POST);
        $user=M('user');
        $user->create();
        $user->regtime=time();
        if($user->add()){
            $this->success('添加成功！',U('index'));
        }
    }

    public function edit(){
        $id=$_GET['id'];
        $user=M('user');
        $row=$user->find($id);
        $this->assign('row',$row);
        $this->display();
    }

    public function update(){
        $user=M('user');
        $user->create();

        // echo $user->save();
        // echo $user->getLastSql();

        if($user->save()){
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
                Image::thumb($file,$file2,'',200,200);

                echo $info[0]['savepath'].'t_'.$info[0]['savename'];
                // echo $info[0]['savepath'].$info[0]['savename'];
           
            }else{
                // $this->error($uploadone->getError());
                echo $upload->getErrorMsg();
            }

        }

}