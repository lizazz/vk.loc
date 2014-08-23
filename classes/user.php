<?php
class User{
	const TABLE='user';
	const DBNAME ='vk';
	public $db=false;
	public $result= false;
	
	public function __construct(){
		$this->db= new PDO('mysql:host=localhost;
					dbname=' . self::DBNAME . ';charset=utf8', 'root','');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	public function registration($data) {
		$insert = $this->db->prepare('insert into ' . self::TABLE .
		' (EMAIL, LOGIN, PASS, BIRTHDAY) values (:email, :login, :pass, :birthday)');
		$insert->bindParam(':email', $data['email']);
		$insert->bindParam(':login', $data['login']);
		$insert->bindParam(':pass', $data['pass']);
		$insert->bindParam(':birthday', $data['birthday']);

		try{
			$insert->execute();
			$this->result = 'Hello ' . $data['login'];
		} catch(Exception $e) {
			$this->result = $e->getMessage();
		}
	}

}