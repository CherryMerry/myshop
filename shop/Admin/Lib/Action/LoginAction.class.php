<?php
class LoginAction extends Action {

    public function index(){
		
		$this->display();              
    }

    public function login(){
        $user=M('user');
        // var_dump($_POST);
        $row=$user->where($_POST)->find();
        // echo $user->getLastSql();
        if($row){
            session('username',$_POST['username']);
            session('login',1);
            $this->success('登陆成功！',U('Index/index'));
        }else{
            $this->error('登录错误！','index');
        }
        
    }

    public function logout(){
        session(null);
        session('[destory]');
        cookie(session_name(),null);

        $this->success('退出成功！','index');
    }


    public function insert(){
        $user=M('user');
        $user->create();
        $user->regtime=time();
        if($user->add()){
            $this->success('添加成功！',U('index'));
        }
    }

    public function update(){
        $user=M('user');
        $user->create();
        if($user->save()){
            $this->success('修改成功！',U('index'));
        }
    }


}