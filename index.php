<!DOCTYPE html>
<html lang="en">

 <head>
	<title>MySonApp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script>
		function welcome(text){
			// alert(text);
			location.href =  "pictures.php";		
		}
	</script>
 </head>

 <body>
 	<div class="title top">
			首页
			<div class="right"><img src="b2.jpg" width="20" height="20"></div>
		</div>
	
 	<div class="form">
	 	<img src="http://www.w3school.com.cn/ui2017/logo-144.png"/><br/>
	 	<input type="text" class="form_text"><br/>
	 	<input type="text" class="form_text"><br/>
	 	<input type="button" value="登录" onclick="welcome('欢迎')"> <input type="button" value="注册" onclick="welcome('注册')"><br/>
		<a href="pictures.php">跳转</a>
    </div>

 </body>


</html>