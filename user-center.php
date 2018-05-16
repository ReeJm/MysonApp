<!DOCTYPE html>
<html lang="en">

 <head>
	<title>MySonApp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script>
		function welcome(text){
			// alert(text);
			location.href = text ;		
		}
	</script>
 </head>

 <body>
<div>
		<div class="title top">
			个人中心
			<div class="right"><img src="b2.jpg" width="20" height="20"></div>
		</div>
		<div class="content">
		<div class="face">
			<div class="c1"><img src="c1.jpg"/></div>
			<div class="name">用户名</div>
		</div>
		<div class="home_list">
			<div class="home_item">
				<div class="home_text left"><img src="like.jpg"></div> 
				<div class="home_text left">第一行</div>
				<div class="right"><img src="arrow.jpg"></div>
				<div class="home_text right">32274</div>
				<div class="clear"></div> 
			</div>
			<div class="home_item">
				<div class="home_text left"><img src="like.jpg"></div> 
				<div class="home_text left">第一行</div>
				<div class="right"><img src="arrow.jpg"></div>
				<div class="home_text right">32274</div>
				<div class="clear"></div> 
			</div>
			<div class="home_item">
				<div class="home_text left"><img src="like.jpg"></div> 
				<div class="home_text left">第一行</div>
				<div class="right"><img src="arrow.jpg"></div>
				<div class="home_text right">32274</div>
				<div class="clear"></div> 
			</div>
			<div class="home_item">
				<div class="home_text left"><img src="like.jpg"></div> 
				<div class="home_text left">第一行</div>
				<div class="right"><img src="arrow.jpg"></div>
				<div class="home_text right">32274</div>
				<div class="clear"></div> 
			</div>
		
		</div>
		
		</div>
	    <div class="bottom">
		<div class="b1">
		<img src="bottom.jpg" onclick="welcome('pictures.php')" />
		<div>相册</div>
		</div>
		<div class="b1">
		<img src="bottom.jpg" onclick="welcome('user-center.php')" />
		<div>发布</div>
		</div>
		<div class="b1">
		<img src="bottom.jpg" onclick="welcome('user-center.php')" />
		<div>我</div>
	</div>

</div>

	</div>



 </body>


</html>