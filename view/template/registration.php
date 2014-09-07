<?php 
	if(isset($result)):?>
	<h2><?php echo $result;?></h2>
<?php endif;?>
<p>Моментальная регистрация</p>
	<form method="POST" action="comfirm.php">
		<input type="hidden" name="auth" value="registration">
		<br>Введите адрес email<br><input type="text" name="email">
		<br>Введите логин<br><input type="text" name="login">
		<br>Введите пароль<br><input type="text" name="pass">
		<br>Введите дату рождения <br><input type="text" name="birthday">
		<br><input type="submit" name="подтвердить">
	</form>
