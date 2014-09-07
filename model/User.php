<?php
class User{
	//include "";
	const TABLE='user';
	const DBNAME ='vk';
	public $db=false;
	public $result= false;
	public $access=false;
	
	public function __construct(){
		$this->db= new PDO('mysql:host=localhost;
					dbname=' . self::DBNAME . ';charset=utf8', 'root','');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
//функция registration отвечает за занесение данных таблицы в базу данных user
	public function registration($data) {
	//-----------------------------------------------------------------------------------------------------------
	// Функцию Validation пока добавить не могу, т.к. для ее работы надо вытянуть из базы данных перечень email адресов, а этого у меня не получилось
	/*	if($this->validation($data['email'])){
			return false;
		};*/
		$insert = $this->db->prepare('insert into ' . self::TABLE .
		' (AUTH, EMAIL, LOGIN, PASS, BIRTHDAY) values (:auth,:email, :login, :pass, :birthday)');
		$insert->bindParam(':auth', $data['auth']);
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
	//функция select_data отвечает за выборку всей строки из базы данных user
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