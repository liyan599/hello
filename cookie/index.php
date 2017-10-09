<html>
	<meta charset="utf-8">
	<title>我是首页</title>
	<style>
		*{margin:0;padding:0;}
		ul{width:100%;height:60px;background:pink;}
		.left{float:left;font-size:40px;line-height:60px;font-weight:bold;margin-left:40px;}
		.right{float:right;line-height:60px;margin-right:40px;}

	</style>
	<body>
		<ul>
			<li class="left">首页</li>
			<li class="right">
				<?php
					if(isset($_COOKIE['username'])){
						
						echo '欢迎您，登录成功:'.$_COOKIE['username'].'';
						echo '&nbsp;&nbsp;&nbsp;
						&nbsp;<a href="loginout.php">退出</a>';
					}else{
						
						echo '<a href="login.html">登录</a>';
					}
				
				
				?>
			</li>
		</ul>
	
	</body>
</html>