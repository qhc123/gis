<?php
header("Content-Type: text/html; charset=utf-8");
class SecondPageAction extends RootAction {

	//二级编辑页面显示
    public function showPage(){
    	$data = D('SecondPage')->select();
    	$this->assign('data',$data);
    	$this->display();
    }
	
	/*
	*@传入 type类型
	*@return json
	 */
	// public function pageAjax(){
	// 	$id = $_GET['type'];
	// 	$data = D('SecondPage')->where('id='.$id)->find();
	// 	$this->ajaxReturn($data,"JSON");
	// }

	//更新二级页面
	public function updatePage(){
		$data = array();
		$id = I('post.pageId');
		$data['content'] = I('post.content');
		$data['date'] = date("Y-m-j H:i:s");
		$bool = D('SecondPage')->where('id='.$id)->data($data)->save();
		if ($bool) {
			echo "<script>alert('界面修改成功');window.location.href='./showPage'</script>";
		}else{
			echo "<script>alert('您未进行任何操作');history.back();</script>";
		}

	}

}