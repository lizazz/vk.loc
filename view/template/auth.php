<form method="POST" action="login.php">
	Введите логин<br><input type="text" name="login">
	<br>Введите пароль<br><input type="text" name="pass">
	<input type="hidden" name="sesid" value="<?echo session_id();?>">
	<br><input type="submit" name="Войти">
</form>