<?php
class CommitAction extends Action {

    public function index(){
		$commit=M('commit'); 
		$rows=$commit->select();
		$this->assign('rows',$rows);     //查询数据分配到模板
		$this->display();              //必须有对应的模板，它的模板是User/index.html
    }

    public function delete(){
    	$id=$_GET['id'];
    	$commit=M('commit');
    	$num=$commit->delete($id);
    	if($num){
            $this->redirect('index');
    	}else{
    		$this->error('删除失败！',U('index'));
    	}
    }

    public function delAll(){
        $shop=M('commit');
        $str=join(',',$_POST['del']);
        if($commit->delete($str)){
            $this->success('删除成功！',U('index'));
        }
    }

    public function edit(){
        $id=$_GET['id'];
        $commit=M('commit');
        $row=$commit->find($id);
        $this->assign('row',$row);
        $this->display();
    }

    public function update(){
        $commit=M('commit');
        $commit->create();
        if($commit->save()){
            $this->success('修改成功！',U('index'));
        }
    }

    




}