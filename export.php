<?php
/**
 * 导出excel
 * @author zhangbing
 **/
header("Content-type:text/html;charset=utf-8");
define('ROOT', dirname(__ROOT__));
require ROOT . '/category.php'; 
require ROOT . '/Mysql/Mysql.php'; 
require ROOT . '/inc.php';
$username = $_COOKIE['islogin']; 
if (!$username) {
	exit("非法操作");
}
$cate = $_GET['cate'];
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
header("Content-type:application/octet-stream");
header("Accept-Ranges:bytes");
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:attachment;filename=".iconv("UTF-8", "GB2312",$catename).".xls");
header("Pragma: no-cache");
header("Expires: 0");
$title = array("提交用户","联系方式","对应人", "提交时间","签到");
foreach ($title as $k => $v) {
	$title[$k]=iconv("UTF-8", "GB2312",$v);
}
$title= implode("\t", $title);
echo "$title\n";	
$sign 	= $_GET['sign']; 
$keyword = $_GET['keyword'];
$where 	= "";
if (is_numeric($sign)) {
	$where .= " and issign={$sign} ";
}
if ($keyword) {
	$where .= " and (name like '%{$keyword}%' or phone like '%{$keyword}%' or cname like '%{$keyword}%' or cphone like '%{$keyword}%' ) ";
}
$result = $db->query("select * from sign where md5(projectid)='{$cate}' {$where}");
while ($row = mysql_fetch_assoc($result)) {
	$array  = array(
		iconv("UTF-8", "GB2312", $row['name']),
		iconv("UTF-8", "GB2312", $row['phone']),
		iconv("UTF-8", "GB2312", $row['cname']),
		iconv("UTF-8", "GB2312", date("Y-m-d", $row['createtime'])),
		iconv("UTF-8", "GB2312", ($row['issign']==1?"是":"否"))
	);
	$data[] = implode("\t", $array);
}
echo implode("\n",$data);