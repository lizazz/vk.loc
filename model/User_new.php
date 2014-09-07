<?php
include "/model/db.php";
class User{
	public $request=false; //переменная отвечает за текст запроса
	public $result= false;
	public $access=false;
	
//функция registration отвечает за занесение данных таблицы в базу данных user
	public function registration($data) {
	//-----------------------------------------------------------------------------------------------------------
	// Функцию Validation пока добавить не могу, т.к. для ее работы надо вытянуть из базы данных перечень email адресов, а этого у меня не получилось
	/*	if($this->validation($data['email'])){
			return false;
		};*/
		$request="prepare('insert into ' . self::TABLE .
		' (AUTH, EMAIL, LOGIN, PASS, BIRTHDAY) values (". :auth . ",".:email ."," . :login ."," . :pass .. :birthday)');"
		$insert = db($db);
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