<?php
/**
 * 签到
 * @author zhangbing
 **/
header("Content-type:text/html;charset=utf-8");
define('ROOT', dirname(__ROOT__));
require ROOT . '/category.php';
require_once ROOT . '/Smarty/Smarty.class.php';
$smarty = new Smarty;
$smarty->template_dir = ROOT . "/templates";
$smarty->compile_dir = ROOT . "/templates_c";
$cate = $_GET['cate']?$_GET['cate']:$_POST['cate'];
if ($_GET['action']=='logout') {
	setcookie('islogin', 1, time()-86400);
	header("Location:index.php?cate={$cate}");
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
	$smarty->display('index.html');
} else {
	if ($_POST) {
		if ($_POST['username']=='zhangbing' && $_POST['password']=='zhangbing') {
			setcookie('islogin', 1, time()+86400);
			header("Location:index.php?cate={$cate}");
		} else {
			$smarty->display("error.html");
		}
	} else {
		$smarty->display('login.html');	
	}
	
}






