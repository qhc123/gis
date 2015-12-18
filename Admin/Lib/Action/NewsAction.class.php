<?php
header("Content-Type: text/html; charset=utf-8");
class NewsAction extends RootAction {

  
   public function news_list(){
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
    $this->display();
   		}
    



    public function add_news(){
     
    
    $name = I('name');
    $model1 = M('admin');
    
    $count = $model1->where('admin_rc=0')->count();
    $list = $model1->where('admin_rc=0')->order('admin_id asc')->limit($limit)->select();
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
    $this->assign('list',$list);
    $this->assign('page',$page);
    $this->assign('id',$name);
    $this->display();
    }

//单条转接
    public function turn(){
      $model = M('student');
      $name1 = I('name1');
      $id = I('id');
      
      $date['st_teacher'] = $name1;
      $res = $model->where('st_id='.$id)->save($date);
      // echo M('student')->getLastSql() ;exit;
      if ($res) {
        echo "<script>alert('转接成功');window.location.href='".U('News/news_list')."'</script>";
      } else {
        echo "<script>alert('转接失败');window.location.href='".U('News/news_list')."'</script>";
      }
      
    }


    //全部转接
    public function turn_all(){

    $model1 = M('admin');
    $name = I('name');
    $user = $_SESSION['User']['admin_name'];
    $count = $model1->where('admin_rc=0')->count();
    $list = $model1->where('admin_rc=0')->order('admin_id asc')->limit($limit)->select();
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
    
    
  
    $this->assign('list',$list);
    $this->assign('page',$page);
    $this->display();
      

    }


     public function do_turn_all(){
    $name = I('name');
    $user = $_SESSION['User']['admin_name'];
    $model = M('student');
    $data['st_teacher'] = $name;

    $res = $model->where("st_teacher='$user'")->save($data);
    // var_dump($res);exit;
    // echo M('student')->getLastSql() ;exit;
    if ($res) {
        echo "<script>alert('转接成功');window.location.href='http://gis.com/index.php/News/turn_all'</script>";
      } else {
        echo "<script>alert('转接失败1');window.location.href='http://gis.com/index.php/News/turn_all'</script>";
      }

  }
  }



