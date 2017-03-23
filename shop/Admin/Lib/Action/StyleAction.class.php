<?php
class StyleAction extends Action {

    public function index(){
		$style=M('style'); 
		$rows=$style->select();
		$this->assign('rows',$rows);     //查询数据分配到模板
		$this->display();              //必须有对应的模板，它的模板是User/index.html
    }

    public function delete(){
    	$id=$_GET['id'];
    	$style=M('style');
    	$num=$style->delete($id);
    	if($num){
            //跳转页面
    		// $this->success('删除成功！',U('index'));
            $this->redirect('index');
    	}else{
    		$this->error('删除失败！',U('index'));
    	}
    }

    public function delAll(){
        $style=M('style');
        $str=join(',',$_POST['del']);
        if($style->delete($str)){
            $this->success('删除成功！',U('index'));
        }
    }

    public function drop(){
        $id=$_GET['id'];
        $style=M('style');
        if($style->delete($id)){
            echo 1;
        }
    }

    public function insert(){
        // var_dump($_POST);
        // $class_id=$_POST['class_id'];
        $style=M('style');
        $style->create();
        if($style->add()){
            $this->success('添加成功！',U('index'));
        }
    }

    public function add(){
        $class=M('class');  
        $classrows=$class->select();
        $this->assign('classrows',$classrows);     //查询数据分配到模板
        $this->display();      
    }

    public function edit(){
        $id=$_GET['id'];
        $style=M('style');
        $row=$style->find($id);
        $this->assign('row',$row);
        $this->display();
    }

    public function update(){
        $style=M('style');
        $style->create();
        if($style->save()){
            $this->success('修改成功！',U('index'));
        }
    }


}