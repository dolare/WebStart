<?php
	/*
	//获取get传递的数据
	var_dump($_GET);
	// 
	// 获取单个get数据,$_GET要大写
	$username=$_GET['username'];
	echo $username;
	echo '<br>';
	$pwd=$_GET['pwd'];
	echo $pwd;*/

	
	//post获取数据
 	var_dump($_POST);
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	echo $username;
	echo '<br>';
	echo $pwd;


	// $_REQUEST获取数据
/*	var_dump($_REQUEST);
	$username=$_REQUEST['username'];
	$pwd=$_REQUEST['pwd'];
	echo $username;
	echo '<br>';
	echo $pwd;*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		用户名: <input type="text" name="username" id="" /><br />
		密码: <input type="password" name="pwd" id="" /><br />
		<input type="submit" value="登录" />	
	</form>
</body>
</html>