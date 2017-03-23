<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		// echo session_id();
		$slide=M('slide');  //实例化user对象
		$slideRows=$slide->select();
		$this->assign('slideRows',$slideRows);     //查询数据分配到模板

		$brand=M('brand');
		$brandRows=$brand->select();
		$this->assign('brandRows',$brandRows);

		$this->display(); 
		
    }
}