<?php /* Smarty version Smarty-3.1.13, created on 2014-03-14 08:15:57
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:370653216ce3577b83-86623811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1394784682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '370653216ce3577b83-86623811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53216ce35c7f30_04259491',
  'variables' => 
  array (
    'cate' => 0,
    'catename' => 0,
    'sign' => 0,
    'keyword' => 0,
    'userlist' => 0,
    'row' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53216ce35c7f30_04259491')) {function content_53216ce35c7f30_04259491($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\APM\\www\\htdocs\\shenyang-sign\\Smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
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
					<small>带客通签到后台</small>
				</a>
				<!-- /.brand -->
			</div>
			<!-- /.navbar-header -->

			<div class="navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="light-blue">
						<a  href="index.php?cate=<?php echo $_smarty_tpl->tpl_vars['cate']->value;?>
&action=logout" >退出</a>

					</li>
				</ul>
				<!-- /.ace-nav -->
			</div>
			<!-- /.navbar-header -->
		</div>
		<!-- /.container -->
	</div>

	<div class="main-container" id="main-container">
		<div class="main-container-inner">
			<a class="menu-toggler" id="menu-toggler" href="#">
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
				</div>
				<!-- #sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="index.html"> <i class="icon-group"></i>
							<span class="menu-text"><?php echo $_smarty_tpl->tpl_vars['catename']->value;?>
</span>
						</a>
					</li>
					<li>
						<a href="http://www.zhixunhudong.com/"> <i class="icon-globe"></i>
							<span class="menu-text">&copy; 智讯互动</span>
						</a>
					</li>
				</ul>
				<!-- /.nav-list -->

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
						<li class="active"><?php echo $_smarty_tpl->tpl_vars['catename']->value;?>
的用户列表</li>
					</ul>
					<!-- .breadcrumb -->

					<!-- #nav-search -->
				</div>

				<div class="page-content">
					<div class="row">
						<div class="col-xs-12">
							<div class="table-responsive">
								<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
									<form method="get" action="">
										<div class="row">
											<div class="col-sm-8">
												<div id="sample-table-2_length">
													<label>
														<select name="sign">
															<option value="" <?php if ($_smarty_tpl->tpl_vars['sign']->value==null){?>selected<?php }?>>用户全部</option>
															<option value="1" <?php if ($_smarty_tpl->tpl_vars['sign']->value==1){?>selected<?php }?>>签到用户</option>
															<option value="0" <?php if ($_smarty_tpl->tpl_vars['sign']->value=='0'){?>selected<?php }?>>未签到用户</option>
														</select>
													</label>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-group">
													<input class="form-control" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" type="text" placeholder="关键词"/>
													<span class="input-group-btn">
														<button class="btn btn-sm btn-default" type="submit">
															<i class="icon-search bigger-110"></i>
															搜索
														</button>
														<a href="export.php?cate=<?php echo $_smarty_tpl->tpl_vars['cate']->value;?>
&sign=<?php echo $_smarty_tpl->tpl_vars['sign']->value;?>
&keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" target="_blank" class="btn btn-sm btn-info" type="button" style="margin-left:10px">
															<i class="icon-hdd bigger-110"></i>
															导出数据
														</a>
													</span>
												</div>
											</div>
										</div>
										<input type="hidden" name="cate" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value;?>
" />
										<input type="hidden" name="p" value="1" />
									</form>
									<table id="J_userListTab" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
										<thead>
											<tr>
												<th>提交用户</th>
												<th>联系方式</th>
												<th>对应人</th>
												<th>对应人类型</th>
												<!-- <th>提交时间</th> -->
												<th>签到</th>
											</tr>
										</thead>
										<tbody>
											<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</td>
												<td>
													<span class="orange"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['cname'])===null||$tmp==='' ? "--" : $tmp);?>
</span>
												</td>
												<td><?php if ($_smarty_tpl->tpl_vars['row']->value['cname']){?>置业顾问<?php }else{ ?>--<?php }?></td>
												<!-- <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['createtime'],"Y-m-d H:i:s");?>
</td> -->
												<td>
													<?php if ($_smarty_tpl->tpl_vars['row']->value['issign']==1){?>
													<button class="J_signIn btn btn-xs btn-grey" disabled="desabled" data-id="134">
														<i class="icon-ok bigger-120"></i>
														已签到
													</button>
													<?php }else{ ?>
													<button class="J_signIn btn btn-xs btn-success" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
														<i class="icon-ok bigger-120"></i>
														签到
													<?php }?>
													</button>
												</td>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								<div class="row">
									<div class="col-sm-8">
										<div class="dataTables_paginate paging_bootstrap">
											<ul class="pagination"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /.page-content -->
		</div>
		<!-- /.main-content -->

	</div>
	<!-- /.main-container-inner -->

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="icon-double-angle-up icon-only bigger-110"></i>
	</a>
</div>
<!-- /.main-container -->

<!-- basic scripts -->
<!--[if !IE]>
-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- <![endif]-->
<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
<!--[if !IE]>
-->
<script type="text/javascript">
	window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");</script>
<!-- <![endif]-->
<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");</script>
<![endif]-->
<script>
	if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");</script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/typeahead-bs2.min.js"></script>
<!-- page specific plugin scripts -->
<script src="assets/js/fuelux/data/fuelux.tree-sampledata.js"></script>
<script src="assets/js/fuelux/fuelux.tree.min.js"></script>
<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<!-- inline scripts related to this page -->
<script>

$(function(){
	//复选框
	$('#J_userListTab th input:checkbox').on('click' , function(){
		var that = this;
		$(this).closest('table').find('tr > td:first-child input:checkbox')
		.each(function(){
			this.checked = that.checked;
			$(this).closest('tr').toggleClass('selected');
		});
	});
	//签到
	$('#J_userListTab .J_signIn').on('click',function(){
		var id=$(this).attr('data-id');
		var self=this;
		$.post('api.php',{id:id},function(data){
			if(data.status==200){
				$(self).removeClass('btn-success').addClass('btn-grey').html('<i class="icon-ok bigger-120"></i>已签到').prop('disabled',true);
			} else {
				alert(data.message);
			}
		},'json')
	});

});

</script>
</body>
</html><?php }} ?>