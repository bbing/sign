<?php
/**
 * 签到
 * @author zhangbing
 **/
header("Content-type:text/html;charset=utf-8");
define('ROOT', dirname(__ROOT__));
require ROOT . '/category.php'; 
require ROOT . '/Mysql/Mysql.php'; 
require ROOT . '/Page/Page.class.php';
require ROOT . '/Smarty/Smarty.class.php';
require ROOT . '/inc.php';
$smarty = new Smarty;
$smarty->template_dir = ROOT . "/templates";
$smarty->compile_dir = ROOT . "/templates_c";
$cate = $_GET['cate']?$_GET['cate']:$_POST['cate'];
if ($_GET['action']=='logout') {
	setcookie('islogin', 1, time()-86400);
	header("Location:index.php?cate={$cate}");exit;
}

if (!$cate) {
	exit("参数缺失"); 
}
foreach ($category as $key => $value) {
	if (md5($key) == $cate) {
		$catename = $value;
		break;
	}
}
if (!$catename) {
	exit("项目不存在");
}
$username = $_COOKIE['islogin']; 
$smarty->assign('catename', $catename);
$smarty->assign('cate', $cate);
if ($username) { 
	$sign 	= $_GET['sign']; 
	$keyword = $_GET['keyword'];
	$where 	= "";
	if (is_numeric($sign)) {
		$where .= " and issign={$sign} ";
	}
	if ($keyword) {
		$where .= " and (name like '%{$keyword}%' or phone like '%{$keyword}%' or cname like '%{$keyword}%' or cphone like '%{$keyword}%' ) ";
	}
	$count 	= $db->count("select count(1) from sign where md5(projectid)='{$cate}' {$where}");
	$page   = new Page($count);
	$nowpage	= $_GET['p']?$_GET['p']:1;
	$start	=	($nowpage-1)*$page->listRows;
	$result = $db->query("select * from sign where md5(projectid)='{$cate}' {$where} limit {$start},{$page->listRows}");
	while ($row = mysql_fetch_assoc($result)) {
		$userlist[] = $row;
	}
	$smarty->assign('sign', $sign);
	$smarty->assign('keyword', $keyword);
	$smarty->assign('page', $page->show());
	$smarty->assign('userlist', $userlist);
	$smarty->display('index.html');
} else {
	if ($_POST) {
		if ($_POST['username']==$account['username'] && $_POST['password']==$account['password']) {
			setcookie('islogin', 1, time()+86400);
			header("Location:index.php?cate={$cate}");exit();
		} else {
			$smarty->display("error.html");
		}
	} else {
		$smarty->display('login.html');	
	} 
}