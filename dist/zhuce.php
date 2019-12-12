<?php
	header('content-type:text/html;charset=utf8');
	$connect = mysqli_connect('localhost','root','root','user',3306);
	if(mysqli_connect_error()){
		die('数据库连接错误');
	}
	$username = $_POST['username'];//用户名
	$password = $_POST['password'];//密码
	//获取请求参数和主体的数组:$_POST,$_GET,$_REQUEST

	//把用户插入数据库
	$sql = "INSERT INTO user (name,password) VALUES ('$username','$password')";
	$result = mysqli_query($connect,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>