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
	.admin-logo img{
		width: 160px;
		height: 155px;
	}
</style>
<div class="content">
	<div class="main-content">
	    <div class="header">
	        <h1 class="page-title">系统设置</h1>
	        <ul class="breadcrumb">
	            <li><a href="__APP__/Index/index">Home</a></li>
	            <li class="active">信息修改</li>
	    	</ul>
		</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form action="__APP__/System/update_admin_info" method="post" name="content" id="content" enctype="multipart/form-data">
				<div class="col-md-8 col-md-offset-4 admin-logo"><img src="__ROOT__/<?php echo ($info["admin_img"]); ?>" alt="您的尊颜" class="img-circle"></div>
				<div class="form-group">
				<label>头像修改</label>
				    <input type="file" name="photo">
				</div>
				 <div class="form-group">
				 	<input type="hidden" value="<?php echo ($info["admin_id"]); ?>" name="admin_id">
                      <label>用户名修改</label>
                      <input type="text" name="username" class="form-control span12" value="<?php echo ($info["admin_name"]); ?>">
                  </div>
                  <div class="form-group">
                  <label>密码修改<span style="color:red"> （*必填项）</span></label>
                      <input type="password" name="password" class="form-control span12 form-control">
                  </div>
			  
			  <div class="pull-right"><button class="btn btn-info" onclick="return checkFrom();">保存修改的内容</button></div>
			</form>
		</div>
	</div>
	<script type="text/javascript">

	function checkFrom(){
		var add = document.content;
		if(add != null){

			if(add.username.value == ''){
				alert('用户名不能为空');
				add.username.focus();
				return false;
			}
			
			if (add.password.value == '') {
				alert('请填写密码');
				add.password.focus();
				return false;
			}
		    
			
			$('#content').submit();
		}
		return false;
	}

	</script>
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