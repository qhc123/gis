<?php
header("Content-Type: text/html; charset=utf-8");
class StudyParkAction extends RootAction {

    public function show_study_park(){
        // echo '<pre/>';
        // var_dump($_SESSION['User']);exit;
		$model = M('student');
		//查询满足条件的总记录
        $name = $_SESSION['User']['admin_name'];
		$count = $model->join('left join tb_admin on tb_student.st_teacher=tb_admin.admin_name')->where("tb_admin.admin_name='$name'")->count();
        
        
		import('ORG.Util.Page');//导入分页类
		//实例化分页类 传入总记录数和每页显示的条数
		$per_page = 10;
		$p = new Page($count,$per_page);

		$p->setConfig('header', '条记录');
		$p->setConfig('first', '首页');
		$p->setConfig('last', '末页');
		$p->setConfig('theme', '总共有 %totalRow% %header%  %nowPage%/%totalPage% 页  %linkPage% %upPage% %downPage%');
		//分页输出
		$page = $p->show();
		//分页数据查询
		$limit = $p->firstRow.','.$p->listRows;
		$list = $model->join('left join tb_admin on tb_student.st_teacher=tb_admin.admin_name')->where("tb_admin.admin_name='$name'")->order('st_id asc')->limit($limit)->select();
        
		$this->assign('list',$list);
		$this->assign('page',$page);
      if($_SESSION['User']['admin_rc']==1){
                   $model1 = M('admin');
                   $count = $model1->where('admin_rc=0')->count();
                   $list = $model1->where('admin_rc=0')->order('admin_id asc')->limit($limit)->select();
                   // echo M('admin')->getLastSql();exit;
                   // var_dump($list);exit;
                   $this->assign('list',$list);
                   $this->assign('page',$page);
                   
                   $this->display('show_study_park1');
                 }else{

                    $this->display();
                 }
     
    }
    public function show_study_park1(){
        $model = M('student');
        //查询满足条件的总记录
        $name = $_GET['name'];
        
        $count = $model->join('left join tb_admin on tb_student.st_teacher=tb_admin.admin_name')->where("tb_admin.admin_name='$name'")->count();
        
        
        import('ORG.Util.Page');//导入分页类
        //实例化分页类 传入总记录数和每页显示的条数
        $per_page = 10;
        $p = new Page($count,$per_page);

        $p->setConfig('header', '条记录');
        $p->setConfig('first', '首页');
        $p->setConfig('last', '末页');
        $p->setConfig('theme', '总共有 %totalRow% %header%  %nowPage%/%totalPage% 页  %linkPage% %upPage% %downPage%');
        //分页输出
        $page = $p->show();
        //分页数据查询
        $limit = $p->firstRow.','.$p->listRows;
        $list = $model->join('left join tb_admin on tb_student.st_teacher=tb_admin.admin_name')->where("tb_admin.admin_name='$name'")->order('st_id asc')->limit($limit)->select();
        
        $this->assign('list',$list);
        $this->assign('page',$page);
        $this->display('show_study_park');
    }

    public function del_DirAndFile($dir) {
  //先删除目录下的文件：
  // $dir = "E:/gis/Public/Filedownload/joinus-excel";
  $dh=opendir($dir);

  while (($file=readdir($dh)) !== false) {

    if($file!="." && $file!="..") {
      $fullpath=$dir.$file;
     
      if(!is_dir($fullpath)) {
        
          unlink($fullpath);
      } else {
        
          deldir($fullpath);
      }
    }
  }

  closedir($dh);
  
}
    public function getOrderList(){
        // 导入xls
        include_once("./Public/Vendor/excel/excel/reader.php");
        // 删除临时目录下的excel文件(防止无用文件积累过多)
        $this->del_DirAndFile("./Public/Filedownload/joinus-excel/");

        $tmp = $_FILES['file']['tmp_name'];
        if (empty($tmp)) {
            $this->error("请选择要导入的Excel文件！");
        }
        
        $save_path = "./Public/Filedownload/joinus-excel/";
        // 拼接文件上传到服务器上存放的目录以及文件名
        $file_name = $save_path.date('Ymdhis').".xls";
        // var_dump($file_name);exit;
        // 进行文件上传
        $as = copy($tmp, $file_name);
        
        if (copy($tmp, $file_name)){
            $xls = new Spreadsheet_Excel_Reader();
            $xls->setOutputEncoding('utf-8');
            // 读取上传到服务器上的xls文件中的数据
            $xls->read($file_name);
            
            $k = 0;
            // 循环从xls文件中读取数据 并进行sql语句的拼接
            for ($i = 2; $i <= $xls->sheets[0]['numRows']; $i++) {
                $name     = $xls->sheets[0]['cells'][$i][1];
                $sex     = $xls->sheets[0]['cells'][$i][2];
                $date    = $xls->sheets[0]['cells'][$i][3];
                $class      = $xls->sheets[0]['cells'][$i][4];
                $qq = $xls->sheets[0]['cells'][$i][5];
                $teacher = $xls->sheets[0]['cells'][$i][6];
                $tel = $xls->sheets[0]['cells'][$i][7];
                
                // 拼接sql语句的values部分 进行一次性插入
                // $data_values .= "('$name','$sex','$date','$tel','$class','$qq'),";
                $k++;
                $date1[] = $name;
                $date2[] = $date;
                $date3[] = $tel;
                $date4[] = $class;
                $date5[] = $qq;
                $date6[] = $sex;
                $date7[] = $teacher;

                
            }
            
            $res3 = array();
            for($c=0;$c<count($date1);$c++){ 
            $model1 = M('student');
            $res=$model1->where("st_name ='".$date1[$c]."' AND st_date = '".$date2[$c]."'")->find();
            $res3[$c] = $res;
            if ($res) {
                 echo '姓名为:'.$date1[$c].'出现重复</br>';
            } elseif($name&&$teacher) {
                
                $data['st_name'] = $date1[$c];
                $data['st_sex'] = $date6[$c];
                $data['st_date'] = $date2[$c];
                $data['st_class'] = $date4[$c];
                $data['st_qq'] = $date5[$c];
                $data['st_tel'] = $date3[$c];
                $data['st_teacher'] = $date7[$c];
                // var_dump($data);exit;
                $res1 = $model1->add($data);
                // echo  M('student')->getLastSql();
            }
            
            }
            
            $a = array_filter($res3);
            if ($res1&&empty($a)) {
               $this->success("成功导入 $k 条数据",'',3);
            } else {
               $this->error("数据导入失败",'',10);
            }
            
            // 去掉最后一个逗号
            // $data_values = substr($data_values, 0, -1); 
            // $model = M('student');
            // $sql = "insert into tb_student(st_name,st_sex,st_date,st_tel,st_class,st_qq) values $data_values";
            // 进行数据的插入
            
            // var_dump($sql);exit;
            // $model->query($sql);
            // $id = mysql_insert_id();
            // echo  M('student')->getLastSql();exit;
            // var_dump($model);exit;
        //     if($id){
        //         $this->success("成功导入 $k 条数据");
        //     }else{
        //         $this->error("数据导入失败");
        //     }
        // } else {
        //     $this->error("文件上传失败");
         }
    }

    
    public function deletList(){
    	$id = I('post.news_id');
    	$p = I('post.page');
    	$bool = D('student')->where('st_id='.$id)->delete();
    	if ($bool) {
    		echo "<script>alert('删除成功');window.location.href='./show_study_park/p/$p'</script>";
    	}else{
    		echo "<script>alert('删除失败!请重新尝试！');history.back();</script>";
    	}
    }
    
    public function addList(){
        $name = I('name');
        $sex = I('sex');
        $date = I('date');
        $class = I('class');
        $qq = I('qq');
        $teacher = I('teacher');
        $tel = I('tel');
        $model = M('student');
        $dataCount = count($name);
        $return = array();

        for ($i=0;$i<$dataCount;$i++) {
            $res = $model->where("st_name ='".$name[$i]."' AND st_date = '".$date[$i]."'")->find();
            
            // echo  M('student')->getLastSql();exit;
            if($res){
                $return[] = $name[$i];
                
                
            }elseif($name[$i]&&$teacher[$i]){
               
                $data['st_name'] = $name[$i];
                $data['st_sex'] = $sex[$i];
                $data['st_date'] = $date[$i];
                $data['st_class'] = $class[$i];
                $data['st_qq'] = $qq[$i];
                $data['st_teacher'] = $teacher[$i];
                $data['st_tel'] = $tel[$i];
                $res1 = $model->add($data);
                // echo M('student')->getLastSql();exit;
            }
        }
        if($return){
            for($a=0;$a<count($return);$a++){
                echo "姓名为:".$return[$a]."出现重复，点击
                <html>
                <a href='".U('StudyPark/add_study_park')."' >返回</a>
                </html>重新输入</br>";
                
            }
            
        }elseif($res1){
            $this->success('数据导入成功');
        }else{
            $this->error('数据导入失败,请检查要提交的数据');
        }
    }
     
}
    