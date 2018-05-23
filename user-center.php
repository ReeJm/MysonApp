<?php
define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
include_once(S_ROOT.'/inc/config.php');
include_once(S_ROOT."/inc/dbc.php");

$json = array();
// $sql = "INSERT INTO `users`(`name`, `sex`, `passwords`, `birthday`, `face`) VALUES ('wx13','male','sladfa','54564','6351651')";  
	$sql = 'select * from `users` where id=1';


global $db;
try{
	$t = $db->query($sql);
	$row = $db->fetch($t);

	// while($row = $db->fetch($t)){
	// 	array_push($json,$row);
	// }

}catch (Exception $e){
	$json =  $e->getMessage(); 
}


$db->close();

?>
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
			<div class="c1"><img src="<?=$row['face']?>"/></div>
			<div class="name"><?=$row['name']?></div>
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
		<img src="bottom.jpg" onclick="welcome('update.php')" />
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