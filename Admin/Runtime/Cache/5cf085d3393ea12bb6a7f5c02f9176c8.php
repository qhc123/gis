<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>GIS后台管理</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.css">
    <link rel="stylesheet" href="__PUBLIC__/admin/font-awesome/css/font-awesome.css">
    <script src="__PUBLIC__/js/jquery-v1.10.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/ueditor/themes/default/css/ueditor.css">
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.all.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/stylesheets/premium.css">

</head>
<body class=" theme-blue">
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Gis后台管理</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> 管理员
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
                <li><a href="#">个人中心</a></li>
                <li class="divider"></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="__APP__/Public/clear_login">退出登陆</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
<div class="sidebar-nav">
    <ul>
        <!-- 菜单一 -->
        <!-- <li>
            <a href="#" data-target=".premium-menua" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-camera-retro"></i> 图片管理 <i class="fa fa-collapse"></i></a>
        </li>
        <li>
            <ul class="premium-menua nav nav-list collapse">
                <li ><a href="__APP__/Img/changeImage"><span class="fa fa-caret-right"></span> 图片更换</a></li>               
            </ul>
        </li> -->
        <!-- 菜单二 -->
        <!-- <li>
            <a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-plus-square-o"></i> 二级页面管理 <span class="label label-info">+3</span></a>
        </li>
        <li>
            <ul class="accounts-menu nav nav-list collapse">
                <li ><a href="__APP__/SecondPage/showPage"><span class="fa fa-caret-right"></span> 编辑二级页面</a></li>
            </ul>
        </li> -->
      <!--   <li>
          <a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-globe"></i> 考试信息 <i class="fa fa-collapse"></i></a>
      </li>
      <li>
          <ul class="premium-menu nav nav-list collapse">
              <li ><a href="__APP__/ExamInfo/exam_info_list"><span class="fa fa-caret-right"></span> 考试信息列表</a></li>
              <li ><a href="__APP__/ExamInfo/edit_exam_info"><span class="fa fa-caret-right"></span> 编辑考试信息</a></li>
          </ul>
      </li> -->
        <!-- 菜单三 -->
        <!-- <li>
            <a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-bank"></i> 考试中心<i class="fa fa-collapse"></i></a>
        </li>
        <li>
            <ul class="premium-menu nav nav-list collapse">
                <li ><a href="__APP__/ExamCenter/show_exam_center"><span class="fa fa-caret-right"></span> 查看信息</a></li>
                
            </ul>
        </li> -->
        <!-- 菜单四 -->
        <li>
            <a href="#" data-target=".premium-menub" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-graduation-cap"></i> 信息管理<i class="fa fa-collapse"></i></a>
        </li>
        <li>
            <ul class="premium-menub nav nav-list collapse">
                <li ><a href="__APP__/StudyPark/show_study_park"><span class="fa fa-caret-right"></span> 学生信息</a></li>
                <li ><a href="__APP__/StudyPark/add_study_park"><span class="fa fa-caret-right"></span> 信息导入</a></li>
            </ul>
        </li>
        <!-- 菜单五 -->
        <li>
            <a href="#" data-target=".premium-menuc" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-wordpress"></i> 转接资料<i class="fa fa-collapse"></i></a>
        </li>
        <li>
            <ul class="premium-menuc nav nav-list collapse">
                <li ><a href="__APP__/News/news_list"><span class="fa fa-caret-right"></span> 单条转接</a></li>
                <li ><a href="__APP__/News/turn_all"><span class="fa fa-caret-right"></span> 全部转接</a></li>
            </ul>
        </li>
        <!-- 菜单六 -->
        <!-- <li>
            <a href="#" data-target=".premium-menud" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-phone-square"></i> 联系我们<i class="fa fa-collapse"></i></a>
        </li>
        <li>
            <ul class="premium-menud nav nav-list collapse">
                <li ><a href="__APP__/ConnectUs/connect_us"><span class="fa fa-caret-right"></span> 修改联系方式</a></li>
            </ul>
        </li> -->
        <!-- 菜单七 -->
        <!-- <li>
            <a href="#" data-target=".premium-menuf" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-question"></i> 问答及留言<i class="fa fa-collapse"></i></a>
        </li>
        <li>
            <ul class="premium-menuf nav nav-list collapse">
                <li ><a href="__APP__/Question/questionList"><span class="fa fa-caret-right"></span> 经典问答</a></li>
                <li ><a href="__APP__/Message/messageList"><span class="fa fa-caret-right"></span> 留言管理</a></li>
            </ul>
        </li> -->
        <!-- 菜单八 --> 
        <li>
            <a href="#" data-target=".premium-menue" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-wrench"></i> 系统设置<i class="fa fa-collapse"></i></a>
        </li>
        <li>
            <ul class="premium-menue nav nav-list collapse">
                <li ><a href="__APP__/System/set_system"><span class="fa fa-caret-right"></span> 信息修改</a></li>
                <li ><a href="__APP__/System/add_admin"><span class="fa fa-caret-right"></span> 申请管理员</a></li>

            </ul>
        </li>
    </ul>
</div>
<style>
 .page{width: 100.5%;text-align: right;padding: 10px 0;clear: both}
 .page a,.current{font-size: 12px;font-family: Arial;margin: 0 2px;border:1px solid #5fa623;background-color: #fff;padding: 2px 6px;text-decoration: none;}
 .page .current,.page a:hover{background: #7ab63f;color: #fff}
</style>
<div class="content">
  <div class="main-content">
      <div class="header">
          <h1 class="page-title">学生信息</h1>
          <ul class="breadcrumb">
              <li><a href="__APP__/Index/index">Home</a></li>
              <li class="active">资料列表</li>
        </ul>
    </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <table class="table table-striped">
        <table class="table">
          <thead>
            <tr>
              <th>序号</th>
              <th>学生姓名</th>
              <th>性别</th>
              <th>出生日期</th>
              <th>班级</th>
              <th>QQ</th>
              <th>电话</th>
              
              <th>转接资料</th>

            </tr>
          </thead>
          <tbody id="thelist">
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
              <td><?php echo ($vo["st_id"]); ?></td>
              <td><?php echo ($vo["st_name"]); ?></td>
              <td><?php echo ($vo["st_sex"]); ?></td>
              <td><?php echo ($vo["st_date"]); ?></td>
              <td><?php echo ($vo["st_class"]); ?></td>
              <td><?php echo ($vo["st_qq"]); ?></td>
              <td><?php echo ($vo["st_tel"]); ?></td>
              <td><?php echo ($vo["file_upload_time"]); ?></td>

              <td>
                  <a href="__APP__/News/add_news/name/<?php echo ($vo["st_id"]); ?>" >转接</a>
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
          </tbody>
        </table>
      </table>
    </div>
  </div>
  <!-- 分页菜单 -->
  <div class="col-md-7">
  <tr><td><div class="page"><?php echo ($page); ?></div></td></tr>
  </div>

<footer>
                <hr>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right"><a href="http://www.portnine.com/bootstrap-themes" target="_blank">中华人民共和国工业和信息化部版权所有</a></p>
                <p>© 2015 <a href="http://www.portnine.com" target="_blank">武汉</a></p>
            </footer>
        </div>
    </div>


    <script src="__PUBLIC__/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
        
    </script>
    
  
</body></html>