<?php
// header("location: http://localhost/t1/admin.html");
// exit;

require_once('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query_word = sprintf("select password from admin where username='%s'", $username);
$result = $conn->query($query_word);

if ($result->num_rows > 0){
	while  ($row = $result->fetch_assoc()){
		if ($row['password'] == $password)
		{
			echo "登录成功";
		}
		else 
			echo "用户名或密码错误";
	}
} else {
	echo "用户名或密码错误";
}


header("location: http://localhost/t1/admin.html");
exit;
?>