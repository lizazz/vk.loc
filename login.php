﻿<?php
	if (!empty($_POST)){
		var_dump($_POST);
		$db= new PDO('mysql:host=localhost;
					dbname=vk;charset=utf8', 'root','');
		//Точки обязательно должны быть в php, а не в html или sql части кода, следи за обрамлениями (точки должны быть синими)
		// перед query стоит не равно а ->
		//чтобы проверить где ошибка в пхп или скьюэл запросе,
		$db-> query('INSERT INTO user (EMAIL,LOGIN,PASS,BIRTHDAY) VALUES ("'. $_POST['email'] .'","' . $_POST['login'] .'","' . $_POST['pass'] . '","' . $_POST['birthday'] . '")');
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<style type="text/css">
			h1{
			font-size: 120%;
			font-family: Verdana, Arial, Helvetica;
			color: #0000FF;
			background-color: gray;
			}
		</style>
		<title>Страница пользователя</title>
	</head>
	<body>
		<p><a href="/index.php">VK.LOC</a></p>
		<h1>Страница пользователя</h1>
			<br><img src="http://vk.architektor.com.ua/images/happy.jpg" alt="happy" alt="happy" width="320" height="220">
		
	</body>
</html>