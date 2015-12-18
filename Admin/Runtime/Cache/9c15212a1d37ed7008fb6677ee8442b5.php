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

 
  
    <table width="98%" border="0" align="center" style="margin-top:20px;margin-left: 245px; border:1px solid #9abcde;">  
    <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="__APP__/StudyPark/getOrderList">  
      
        <tr >  
            <td height="28" colspan="2" <label>  <strong><a href="#">excel导入</a></strong></label></td>  
        </tr>  
        <tr>  
            <td width="18%" height="50"> 选择你要导入的数据表</td>  
            <td width="82%"><label>  
            <input name="file" type="file" id="file" size="50" />  
            </label>  
                <label>  
                <input name="button" type="submit" class="nnt_submit" id="button" value="导入数据"    onclick="import_check();"/>  
                </label>  
 </td>  
        </tr>  
        <tr>  
            <td colspan="2" bgcolor="#DDF0FF">  [<span class="STYLE1">注</span>]数据导入格式说明:</td>  
        </tr>  
        <tr>  
            <td colspan="2">    1、其它.导入数据表文件必须是<strong>execel</strong>文件格式{.<span class="STYLE2">xls</span>}为扩展名．</td>  
        </tr>  
        <tr>  
            <td colspan="2">  2、execel文件导入数据顺序必须严格按照规定顺序。</td>  
        </tr>  
        <tr>  
            <td colspan="2"> </td>  
        </tr></form>  
    </table>
    <form id="form1" name="form1"  method="post" action="__APP__/StudyPark/addList">  
    <table width="60%" border="0" align="center" style="margin-top:20px;margin-left: 245px; ">  
    
      
        <tr >  
            <td height="28" colspan="3" ><label>  <strong><a href="#">手动导入</a></strong></label></td>  
        </tr>
        <tr> 
         <td >学生姓名</td>
         
         <td>性别</td>
         <td>出生日期</td>
         <td>班级</td>
         <td>QQ</td>
         <td>负责人</td>
         <td>电话</td>
        </tr>
        <tr> 
         <td><input name="name[]" type="text"  /></td>
         <td><input name="sex[]" type="text" /></td>
         <td><input name="date[]" type="text" /></td>
         <td><input name="class[]" type="text" /></td>
         <td><input name="qq[]" type="text" /></td>
         <td><input name="teacher[]" type="text" /></td>
         <td><input name="tel[]" type="text" /></td>
        </tr>
        <tr> 
         <td><input name="name[]" type="text"  /></td>
         <td><input name="sex[]" type="text" /></td>
         <td><input name="date[]" type="text" /></td>
         <td><input name="class[]" type="text" /></td>
         <td><input name="qq[]" type="text" /></td>
         <td><input name="teacher[]" type="text" /></td>
         <td><input name="tel[]" type="text" /></td>
        </tr>
        <tr> 
         <td><input name="name[]" type="text"  /></td>
         <td><input name="sex[]" type="text" /></td>
         <td><input name="date[]" type="text" /></td>
         <td><input name="class[]" type="text" /></td>
         <td><input name="qq[]" type="text" /></td>
         <td><input name="teacher[]" type="text" /></td>
         <td><input name="tel[]" type="text" /></td>
        </tr>
        <tr> 
         <td><input name="name[]" type="text"  /></td>
         <td><input name="sex[]" type="text" /></td>
         <td><input name="date[]" type="text" /></td>
         <td><input name="class[]" type="text" /></td>
         <td><input name="qq[]" type="text" /></td>
         <td><input name="teacher[]" type="text" /></td>
         <td><input name="tel[]" type="text" /></td>
        </tr>
        <tr> 
         <td><input name="name[]" type="text"  /></td>
         <td><input name="sex[]" type="text" /></td>
         <td><input name="date[]" type="text" /></td>
         <td><input name="class[]" type="text" /></td>
         <td><input name="qq[]" type="text" /></td>
         <td><input name="teacher[]" type="text" /></td>
         <td><input name="tel[]" type="text" /></td>
        </tr>
    </table>

    <input name="submit" type="submit" value="导入" style="margin-left:1335px">

</form>
    </body>
</html>
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