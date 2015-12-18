<?php
header("Content-Type: text/html; charset=utf-8");
session_start();
class PublicAction extends RootAction {
    public function head(){
    	$this->display();
    }

    public function left(){
    	$this->display();
    }

    public function foot(){
    	$this->display();
    }

    public function clear_login(){
    	unset($_SESSION['User']);
    	$this->display('Login/index');
    }
}