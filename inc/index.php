<?php
define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
include_once(S_ROOT.'./config.php');
include_once(S_ROOT."./dbc.php");

$json = array();
// $sql = "INSERT INTO `users`(`name`, `sex`, `passwords`, `birthday`, `face`) VALUES ('wx13','male','sladfa','54564','6351651')";  
	$sql = 'select * from `users`';


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

<html>
<?php
	foreach ($json as $data){
?>

	<span style="color:red" href="http://www.baidu.com">
		<?=$data['name'] ?>
	</span>

	<span><?=$data['sex']?></span>
	<br/>

<?php
	}
?>

</html>