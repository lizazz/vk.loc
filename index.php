<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Добро пожаловать</title>
		<link rel="stylesheet" href="/css/style.css">
	</head>
	<body >
	<table class="main_page">
		<tr>
			<td class=header colspan="2">
				<?php
					include('template/header.php');
				?>
			</td>	
		</tr>
		<tr>
			<td class="sub1">	
					<form method="POST" action="template/login.php">
						Введите логин<br><input type="text" name="Login">
						<br>Введите пароль<br><input type="text" name="password">
						<br><input type="submit" name="Войти">
					</form>
					<br><a href="template/registration.php"> зарегистрироваться</a>
			</td>
			<td class="sub2">
					<img align"="middle" src="images/nokia-3310.jpg" alt="happy" width="195" height="400">
			</td>
		</tr>
		<tr>
			<td class="footer" colspan="2">
				<?php 
					include('template/footer.php');
				?>
			</td>
		</tr>
	</table>
	</body>
</html>