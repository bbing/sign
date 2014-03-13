<?php /* Smarty version Smarty-3.1.13, created on 2014-03-13 09:16:35
         compiled from ".\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:25065321727da53501-86624201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b143acdc50731311b48d7001385e844715105d' => 
    array (
      0 => '.\\templates\\login.html',
      1 => 1394702193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25065321727da53501-86624201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5321727da692e0_88152050',
  'variables' => 
  array (
    'catename' => 0,
    'cate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321727da692e0_88152050')) {function content_5321727da692e0_88152050($_smarty_tpl) {?><!doctype html>
<html>
<head>
	<title>带客通签到后台</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="max-age=0" />
	<meta name="apple-touch-fullscreen" content="yes" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="Description" content="带客通签到后台" />
	<meta name="Keywords" content="带客通签到后台" />
	<!-- basic styles -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<!--[if IE 7]>
	  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
	<![endif]-->
	<!-- page specific plugin styles -->
	<!-- fonts -->
	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

	<!--[if lte IE 8]>
	  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
	<![endif]-->

	<!-- inline styles related to this page -->
	<link rel="stylesheet" href="static/css/mod.login.css" />

	<!-- ace settings handler -->

	<script src="assets/js/ace-extra.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="login">
	<div class="logo">
		<img src="static/img/logo.png" alt="" /> 
	</div>
	<div class="content">
		<form class="login-form" id="wform" action="" method="post">
			<h3 class="form-title"><?php echo $_smarty_tpl->tpl_vars['catename']->value;?>
签到后台</h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>请输入用户名和密码</span>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">用户名</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="用户名" name="username" required="required"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">密码</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" placeholder="密码" name="password" required="required"/>
					</div>
				</div>
			</div>
			<input type="hidden" name="cate" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value;?>
" />
			<div class="form-submit">
			<button type="submit" id="loginSubmit" class="btn btn btn-info btn-sm">
				<i class="icon-key bigger-110"></i>登入
				</button>  
			</div>
		</form>
	</div>
	<div class="copyright">
		&copy; <a href="http://www.zhixunhudong.com/">智讯互动</a>
	</div>
	<!-- # FOOTER # -->
	<!-- 不支持ie7及以下的判断 -->
	<!--[if lte IE 7]>
	<script>window.location.href='/notsupported/';</script>
	<![endif]--> 
</body>
</html><?php }} ?>