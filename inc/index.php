<?php
define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
include_once(S_ROOT.'./config.php');
include_once(S_ROOT."./dbc.php");

$data = array(
	"status"=>0,
	"result"=>array()
);
$json = array();
$sql = 'SELECT * FROM `users`';


global $db;
try{
	$t = $db->query($sql);
	while($row = $db->fetch($t)){
		array_push($json,$row);
	}

	// if($t->num_rows>0){
	// 	$json =  json_encode($row);
	// }else{
	// 	$json =  "{'status':'failed'}";
	// }
}catch (Exception $e){
	$json =  $e->getMessage(); 
}



$db->close();

?>

<html>
<?php
	foreach ($json as $data){
		var_dump($data);
	}
?>
</html>