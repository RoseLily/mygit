<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<h1>123</h1>
<?php
$server ="localhost";  //服务器IP地址,如果是本地，可以写成localhost
$uid ="sa";  //用户名
$pwd ="123456"; //密码
$database ="UserMan";  //数据库名称
 
//进行数据库连接
$conn =mssql_connect($server,$uid,$pwd) or die ("connect failed");
mssql_select_db($database,$conn);
 
//执行查询语句
$query ="select * from users";
$row =mssql_query($query);
 
//打印输出查询结果
while($list=mssql_fetch_array($row))
{
       print_r($list);
       echo "<br>";
}
?>
</body>
</html>