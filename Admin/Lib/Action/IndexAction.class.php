<?php
header("Content-Type: text/html; charset=utf-8");
class IndexAction extends RootAction {
    public function index(){
    	session_start();
    	$info= $_SESSION['User'];
    	$this->assign('info',$info);
    	$this->display();
    }
	
}