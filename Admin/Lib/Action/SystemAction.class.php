<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
class SystemAction extends RootAction {

	//设置界面
    public function set_system(){
    	$info= $_SESSION['User'];
    	$this->assign('info',$info);
    	$this->display();
    }

    //添加显示页面
    public function add_admin(){
    	$this->display();
    }

    //添加一个管理员
    public function register_admin(){
    	$data = array();
        $rc = $_SESSION['User']['admin_rc'];
        $bool = M('Admin');
        $username = I('post.username');
        $mg = I('mg');
        $us = I('us');
        $res = $bool->where("admin_name='$username'")->find();
        // echo M('Admin')->getLastSql();exit;
    	$data['admin_name'] = I('post.username');
    	if (empty($data['admin_name'])) {
    		echo "<script>alert('用户名不能为空');history.back();</script>";
    		exit();//退出
    	}
    	if (I('post.password')!=I('post.repassword')) {
    		echo "<script>alert('两次密码不一致');history.back();</script>";
    		exit();//退出
    	}
    	$data['admin_pwd'] = md5(I('post.password'));
    	//上传图片
    	if (($_FILES["photo"]["size"]>0)) {
	        import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
	        $upload->maxSize   =     3145728 ;// 设置附件上传大小
	        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  'Public/imgpath/';// 设置附件上传目录
	        // 上传文件 
	        $info   =   $upload->upload();
	        if(!$info) {// 上传错误提示错误信息
	            $this->error($upload->getErrorMsg());
	        }else{
	        	$info =  $upload->getUploadFileInfo();
	        	$data['admin_img'] = $info[0]['savepath'].$info[0]['savename'];
	        }
    	}else{
    		//设置默认图片
    		$data['admin_img'] = "Public/admin/img/headerlogo.jpg";
    	}
        
         if(empty($mg)&&empty($us)){
            echo "<script>alert('权限不能为空');history.back();</script>";
            exit();
        }

        if(!empty($mg)&&!empty($us)){
            echo "<script>alert('权限只能单选');history.back();</script>";
            exit();
        }
        if ($mg&&$rc==0) {
            echo "<script>alert('权限不足');history.back();</script>";
            exit();
            
        }elseif($mg&&$rc==1){
            $data['admin_rc'] = $mg;
        }
        if ($us) {
            $data['admin_rc'] = 0;
        }

    	if (empty($res)) {
            $res1 = $bool->data($data)->add();
        }
        
    	if($res1){
    		echo "<script>alert('恭喜！申请成功!');window.location.href='./add_admin'</script>";
    	}else{
    		echo "<script>alert('申请失败，请重新申请');history.back();</script>";
    	}

    }

    //更新管理员信息操作
    public function update_admin_info(){
    	$data = array();
    	$id = I('post.admin_id');
    	$data['admin_name'] = I('post.username');
        $data['admin_pwd'] = md5(I('post.password'));
    	// $data['admin_pwd'] = I('post.password');
    	if ($_SESSION['User']['admin_pwd'] == $data['admin_pwd']) {
    		echo "<script>alert('修改的密码不能与初始密码一致');history.back();</script>";
    		exit();//退出
    	}
    	//上传图片
    	if (($_FILES["photo"]["size"]>0)) {
	        import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
	        $upload->maxSize   =     3145728 ;// 设置附件上传大小
	        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  'Public/imgpath/';// 设置附件上传目录
	        // 上传文件 
	        $info   =   $upload->upload();
	        if(!$info) {// 上传错误提示错误信息
	            $this->error($upload->getErrorMsg());
	        }else{
	        	$info =  $upload->getUploadFileInfo();
	        	$data['admin_img'] = $info[0]['savepath'].$info[0]['savename'];
	        }
    	}
    	$bool = D('Admin')->where('admin_id ='.$id)->data($data)->save();
    	//更新session
    	$_SESSION['User'] = D('Admin')->where('admin_id ='.$id)->find();
    	if($bool){
    		echo "<script>alert('信息修改成功');history.back();</script>";
    	}else{
    		echo "<script>alert('操作失败，请重新修改');history.back();</script>";
    	}

    }

}