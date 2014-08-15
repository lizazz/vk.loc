<html>
	<head>
		<meta charset="utf-8">
		<title>Добро пожаловать</title>
		<style type="text/css">
			h1{
			font-size: 120%;
			font-family: Verdana, Arial, Helvetica;
			color: #0000FF;
			background-color: gray;
			}
		</style>
	</head>
	<body>
	<h1>Главная страница</h1>
	<p>Ввойдите</p>
		<form method="POST" action="/login.php">
			<br>Введите логин<br><input type="text" name="Login">
			<br>Введите пароль<br><input type="text" name="password">
			<br><input type="submit" name="Войти">
		</form>
		<br><img src="http://vk.architektor.com.ua/images/happy.jpg" alt="happy" width="320" height="220">
		<br><a href="/registration.php"> зарегистрироваться</a>
	</body>
</html>