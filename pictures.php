<?php
define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
include_once(S_ROOT.'/inc/config.php');
include_once(S_ROOT."/inc/dbc.php");

$json = array();
// $sql = "INSERT INTO `users`(`name`, `sex`, `passwords`, `birthday`, `face`) VALUES ('wx13','male','sladfa','54564','6351651')";  
	$sql = 'SELECT * from `photo` p left join `childlist` c on p.childlist_id =c.id left join `users` u on p.parents_id=u.id';


global $db;
try{
	$t = $db->query($sql);
	while($row = $db->fetch($t)){
		array_push($json,$row);
	}

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
	<?php
	foreach ($json as $data){
	?>
	<div class="list block">
		<div class="inline">	
	 		<img class='jpg' src="<?=$data['url']?>"/> 
		</div>

	 	<div class="inline desc">
 			<div class="block desc_title"><?=$data['title']?> </div>

 			<div class="block">by <?=$data['name']?> <img src="like.jpg"/> <img src="like.jpg"/></div>
	    </div>

	    
    </div>

    <?php
	}
	?>

    
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