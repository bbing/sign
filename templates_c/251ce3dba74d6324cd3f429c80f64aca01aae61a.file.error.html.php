<?php /* Smarty version Smarty-3.1.13, created on 2014-03-13 09:22:42
         compiled from ".\templates\error.html" */ ?>
<?php /*%%SmartyHeaderCode:977453216fc098e8d8-03003596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '251ce3dba74d6324cd3f429c80f64aca01aae61a' => 
    array (
      0 => '.\\templates\\error.html',
      1 => 1394702559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '977453216fc098e8d8-03003596',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53216fc09b19b2_67937579',
  'variables' => 
  array (
    'catename' => 0,
    'cate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53216fc09b19b2_67937579')) {function content_53216fc09b19b2_67937579($_smarty_tpl) {?><!doctype html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['catename']->value;?>
线下验证后台</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="max-age=0" />
	<meta name="apple-touch-fullscreen" content="yes" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['catename']->value;?>
线下验证后台" />
	<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['catename']->value;?>
线下验证后台" />
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
	<link rel="stylesheet" href="static/css/mod.base.css" />

	<!-- ace settings handler -->

	<script src="assets/js/ace-extra.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="navbar navbar-default" id="navbar">
		<div class="navbar-container" id="navbar-container">
			<div class="navbar-header pull-left">
				<a href="index.php?cate=<?php echo $_smarty_tpl->tpl_vars['cate']->value;?>
" class="navbar-brand">
					<small>
						<?php echo $_smarty_tpl->tpl_vars['catename']->value;?>
-签到							
					</small>
				</a><!-- /.brand -->
			</div><!-- /.navbar-header -->

		</div><!-- /.container -->
	</div>

	<div class="main-container" id="main-container">
		<div class="main-container-inner">
			<a class="menu-toggler" id="menu-toggler" href="index.php?cate=<?php echo $_smarty_tpl->tpl_vars['cate']->value;?>
">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar menu-min" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- #sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="index.php?cate=<?php echo $_smarty_tpl->tpl_vars['cate']->value;?>
">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> 用户验证 </span>
						</a>
					</li>
					<li>
						<a href="http://www.zhixunhudong.com/">
							<i class="icon-globe"></i>
							<span class="menu-text"> &copy; 智讯互动 </span>
						</a>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="index.php?cate=<?php echo $_smarty_tpl->tpl_vars['cate']->value;?>
">首页</a>
						</li>
						<li class="active">信息提示</li>
					</ul><!-- .breadcrumb -->

					<!-- #nav-search -->
				</div>

				<div class="page-content">

					<div class="row">
						<div class="col-xs-12">
							
							<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="red bigger-125">
												<i class="icon-bolt"></i>
												提交失败！
											</span>
										</h1>

										<hr>
										<div class="space"></div>

										<p class="alert alert-warning bigger-120 red"><i class="icon-warning-sign"></i> 用户名或密码错误！</p>

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="index.php?cate=<?php echo $_smarty_tpl->tpl_vars['cate']->value;?>
" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回上一页
											</a>

											<a href="index.php?cate=<?php echo $_smarty_tpl->tpl_vars['cate']->value;?>
" class="btn btn-primary">
												<i class="icon-dashboard"></i>
												返回首页
											</a>
										</div>
									</div>
								</div>

						</div>
					</div>

				</div><!-- /.page-content -->
			</div><!-- /.main-content -->

		</div><!-- /.main-container-inner -->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->

<!-- basic scripts -->
<!--[if !IE]> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- <![endif]-->
<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
<!--[if !IE]> -->
<script type="text/javascript">
	window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>
<!-- <![endif]-->
<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script>
	if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/typeahead-bs2.min.js"></script>
<!-- page specific plugin scripts -->
<script src="assets/js/fuelux/data/fuelux.tree-sampledata.js"></script>
<script src="assets/js/fuelux/fuelux.tree.min.js"></script>
<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<!-- inline scripts related to this page -->

</body>
</html><?php }} ?>