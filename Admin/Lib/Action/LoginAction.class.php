<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
class LoginAction extends Action {
    public function index(){
    	$this->display();
    }

    public function login(){
    	$map = array();
    	$data = array();
    	$map['admin_name'] = I('post.username');
    	$map['admin_pwd'] = md5(I('post.password'));
         // $map['admin_pwd'] = I('post.password');   	
    	$User = M('admin')->where($map)->find();
        
        // var_dump($User[admin_rc]) ;exit;
        // echo M('admin')->getLastSql();exit;
    	if(!empty($User)){
            $_SESSION['User'] = $User;
    		// echo '<pre/>';
            // var_dump($User) ;exit;
    		$data['login_num'] = $User['login_num']+1;
    		$data['last_login_time'] = date("Y-m-j H:i:s");
    		D('Admin')->where("admin_name='".$map['admin_name']."'")->data($data)->save();
            // echo D('Admin')->getLastSql();exit;
    		$this->redirect('Index/index');
    	}else{
    		echo "<script>alert('您输入的账号密码有误，请重新输入');history.back();</script>";
    	}
    }
	
}