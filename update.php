<!DOCTYPE html>
<html lang="en">

 <head>
	<title>MySonApp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script>
		function welcome(text){
			location.href = text ;		
		}
	</script>
 </head>

 <body>
 	<div class="title top">
			上传照片
			<div class="right"><img src="b2.jpg" width="20" height="20"></div>
		</div>
	<div class="form">
		<div><input type="button" value="本地" onclick="welcome('欢迎')"></div>
		<div>tag：<input type="text" class="form_text"><br/></div>
		<div><input type="file" value="上传" onclick="welcome('欢迎')"></div>
	</div>
.
	    
    </div>
    </div>
<div class="bottom">
		<div class="b1">
		<img src="bottom.jpg" onclick="welcome('pictures.php')" />
		<div>相册</div>
		</div>
		<div class="b1">
		<img src="bottom.jpg" onclick="welcome('update.php')" />
		<div>发布</div>
		</div>
		<div class="b1">
		<img src="bottom.jpg" onclick="welcome('user-center.php')" />
		<div>我</div>
	</div>

</div>

 </body>


</html>