<?php
class ClassAction extends Action {

    public function index(){
		$class=M('class');  //连接数据库
		$rows=$class->select();
		$this->assign('rows',$rows);     //查询数据分配到模板
		$this->display();              //必须有对应的模板，它的模板是User/index.html
    }

    public function delete(){
    	$id=$_GET['id'];
    	$class=M('class');
    	$num=$class->delete($id);
    	if($num){
            //跳转页面
    		// $this->success('删除成功！',U('index'));
            $this->redirect('index');
    	}else{
    		$this->error('删除失败！',U('index'));
    	}
    }

    public function delAll(){
        $class=M('class');
        $str=join(',',$_POST['del']);
        if($class->delete($str)){
            $this->success('删除成功！',U('index'));
        }
    }

    public function drop(){
        $id=$_GET['id'];
        $class=M('class');
        if($class->delete($id)){
            echo 1;
        }
    }

    public function insert(){
        $class=M('class');
        $class->create();
        if($user->add()){
            $this->success('添加成功！',U('index'));
        }
    }

    public function edit(){
        $id=$_GET['id'];
        $class=M('class');
        $row=$class->find($id);
        $this->assign('row',$row);
        $this->display();
    }

    public function update(){
        $class=M('class');
        $class->create();
        if($class->save()){
            $this->success('修改成功！',U('index'));
        }
    }

   



}