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
			相册
			<div class="right"><img src="b2.jpg" width="20" height="20"></div>
		</div>
	<div class="content">
	<div class="list block">
		<div class="inline">	
	 		<img class='jpg' src="http://qcloud.dpfile.com/pc/9VMpGkQ_Rr2gx3oguMdNhZ_Lm6WOkAymgUzY9MMBZ05BM8r1yidripH77e-mVDPx.jpg"/> 
		</div>

	 	<div class="inline desc">
 			<div class="block desc_title">title </div>

 			<div class="block">by asdjjh <img src="like.jpg"/> <img src="like.jpg"/></div>
	    </div>

	    
    </div>

    <div class="list block">
		<div class="inline">	
	 		<img class='jpg' src="http://qcloud.dpfile.com/pc/9VMpGkQ_Rr2gx3oguMdNhZ_Lm6WOkAymgUzY9MMBZ05BM8r1yidripH77e-mVDPx.jpg"/> 
		</div>

	 	<div class="inline desc">
 			<div class="block desc_title">title </div>

 			<div class="block">by asdjjh <img src="like.jpg"/> <img src="like.jpg"/></div>
	    </div>

	    
    </div>

    <div class="list block">
		<div class="inline">	
	 		<img class='jpg' src="http://qcloud.dpfile.com/pc/9VMpGkQ_Rr2gx3oguMdNhZ_Lm6WOkAymgUzY9MMBZ05BM8r1yidripH77e-mVDPx.jpg"/> 
		</div>

	 	<div class="inline desc">
 			<div class="block desc_title">title </div>

 			<div class="block">by asdjjh <img src="like.jpg"/> <img src="like.jpg"/></div>
	    </div>

	    
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