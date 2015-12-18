<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
class RootAction extends Action {
	public function __construct() {		
        parent::__construct();
        $this->checkroot();
    }
    public function checkroot(){
    	if (isset($_SESSION['User'])){
    		
    	}else{    		
    		echo "<script>alert('您还没有登录，请先登陆');window.location.href='./admin.php/Login/index';</script>";
    	}
    }
}