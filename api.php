<?php
/**
 * 签到
 * @author zhangbing
 **/
header("Content-type:text/html;charset=utf-8");
define('ROOT', dirname(__ROOT__));
require ROOT . '/Mysql/Mysql.php';
require ROOT . '/inc.php';
$username = $_COOKIE['islogin']; 
if (!$username || !is_numeric($_POST['id'])) {
	echo json_encode(array('status'=>500, 'message'=>'非法请求'));
}
if ($db->query("update sign set issign=1 where id={$_POST['id']}")) {
	echo json_encode(array('status'=>200, 'message'=>'签到成功'));
} else {
	echo json_encode(array('status'=>500, 'message'=>'签到失败'));
}
