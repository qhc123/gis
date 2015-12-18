<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>GIS后台管理--登陆界面</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.css">
    <link rel="stylesheet" href="__PUBLIC__/admin/font-awesome/css/font-awesome.css">
    <script src="__PUBLIC__/js/jquery-v1.10.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/stylesheets/premium.css">

</head>
<body>
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
            <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> GIS网站后台管理</span></a></div>

          <div class="navbar-collapse collapse" style="height: 1px;">

          </div>
        </div>
      </div>
      


          <div class="dialog">
      <div class="panel panel-default">
          <p class="panel-heading no-collapse">登陆界面</p>
          <div class="panel-body">
              <form action="__APP__/Login/login" method="post" class="form">
                  <div class="form-group">
                      <label>用户名</label>
                      <input type="text" name="username" class="form-control span12">
                  </div>
                  <div class="form-group">
                  <label>密码</label>
                      <input type="password" name="password" class="form-control span12 form-control">
                  </div>
                  <a href="javascript:void();" onclick="formsubmit()" class="btn btn-primary pull-right">登陆</a>
                  <label class="remember-me"><input type="checkbox" name="check"> 记住我哦！</label>
                  <div class="clearfix"></div>
              </form>
          </div>
      </div>
  </div>
  <script>
  function formsubmit(){
  	$('.form').submit();
  }
  </script>
 </body>
</html>