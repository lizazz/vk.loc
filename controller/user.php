<?php
include ('model/db.php');
class User extends db{
	public $result= false;
	public $access=false;
//функция registration отвечает за занесение данных таблицы в базу данных user
	public function registration($data) {
	//-----------------------------------------------------------------------------------------------------------
	// Функцию Validation пока добавить не могу, т.к. для ее работы надо вытянуть из базы данных перечень email адресов, а этого у меня не получилось
	/*	if($this->validation($data['email'])){
			return false;
		};*/
		$insert = $this->db->prepare('insert into ' . self::TABLE .
		' (AUTH, sesid, EMAIL, LOGIN, PASS, BIRTHDAY) values (:auth, :sesid, :email, :login, :pass, :birthday)');
		$insert->bindParam(':auth', $data['auth']);
		$insert->bindParam(':sesid', $data['sesid']);
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
	
	public function index(){
		echo 'Hello world';
	}
	
	public function login(){
		echo 'please login';
	}
	
	
	public function auth($login,$password,$access) {
		$select = $this->db->prepare('SELECT EMAIL, LOGIN, PASS, BIRTHDAY FROM ' . self::TABLE . ' WHERE LOGIN = :login');
		$select->bindParam(':login', $login);
		try{
			$select->execute();
			$result = $select->fetch();
			if(!empty($result) && $result['PASS'] == $password) {
				$this->access = true;
				//echo $this->access;
			}
		} catch(Exception $e) {
			$this->result = $e->getMessage();
		}
		return $access;
	}
}
?>