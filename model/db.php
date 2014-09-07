<?php
	function db ($db);
	const TABLE='user';
	const DBNAME ='vk';
	
	public function __construct(){
		db= new PDO('mysql:host=localhost;
					dbname=' . self::DBNAME . ';charset=utf8', 'root','');
		db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		};
?>
