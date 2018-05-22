<?php
/******************************
Database class 2005,10/2012,30/12/2014
Author: Shengjiang Lu
******************************/
class Database{
	protected $host = "localhot";
	protected $dbname = "";
	protected $dbuser = "";
	protected $dbpass = "";
	public $db = null;
	public $msg;
	function Database($host,$dbname,$dbuser,$dbpass){
		$this->host = $host;
		$this->dbname = $dbname;
		$this->dbuser = $dbuser;
		$this->dbpass = $dbpass;
	}
	public function connect(){		
		$db = new mysqli($this->host,$this->dbuser,$this->dbpass,$this->dbname);
		$this->db = $db;
		if($db->connect_errno > 0){
			die('Unable to connect to database [' . $db->connect_error . ']');
		}
	}
	public function close(){
		$this->db->close();
	}
	public function query($sql){
		$t = $this->db->query($sql);
		if($t){
			$this->msg = "You have submitted successfully!";
		}
		else{
			$this->msg = "Failed to submit";
		}
		return $t;
	}
	public function fetch($t){
		if(!$t) {
   		 	throw new Exception("Database Error [{$this->db->errno}] {$this->db->error}");
		}
		return $t->fetch_assoc();
	}
	public function escape_string($str){
		return $this->db->escape_string($str);
	}
	public function num_r($t){
		return $t->num_rows;
	}
	public function free($t){
		$t->free();
	}
	public function insert_id(){
		return $this->db->insert_id;	
	}
	public function data_seek($result,$pos){
		mysqli_data_seek($result,$pos);
    }
}
function path($pDate){
	$path = substr($pDate,0,7);
	$path = str_replace("-","",$path);
	return $path;
}
$db = new Database($_host,$_dbname,$_dbuser,$_dbpass);
$db->connect();
if(isset($db)){
    $db->query("SET NAMES 'UTF8'");
	//mysql_query("SET CHARACTER SET UTF8");
	//mysql_query("SET CHARACTER_SET_RESULTS=UTF8");
}
?>