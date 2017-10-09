<?php
//var_dump($_GET);
//这就是你表单获取过来的值
$name = isset($_GET['username'])?$_GET['username']:'';

$password = isset($_GET['pass'])?$_GET['pass']:'';
//需要你表单获取过来的值跟你数据库里面存放的值进行比对，如果一样证明数据库里面有这个用户，切记：名字和密码一定要一样；
//下面是伪代码，就好比我用sql查询过了
//$sql = 'select * from user where username="liuxi" and password=123456'
//如果sql语句发送成功就会返回结果集，如果有结果集，证明登录成功
if($name == 'liuxi'&& $password =='123456'){	//登录成功的区间
	//还要设置cookie的值，而且设置晚上以后你在每一个页面都要判断cookie是否有值，有值了才会让你操作当前的页面
	setcookie('username',$name,time()+60*60*24);
	echo '登录成功<a href="index.php">跳转到首页</a>';
}else{
	
	//登录失败的区间
	echo '用户名或密码错误，登录失败';
}
	
	
