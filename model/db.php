<?php
	class db {
	const TABLE='user';
	const DBNAME ='vk';
	public $db=false;
	public function __construct(){
		$this->db= new PDO('mysql:host=localhost;
					dbname=' . self::DBNAME . ';charset=utf8', 'root','');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
};
?>
