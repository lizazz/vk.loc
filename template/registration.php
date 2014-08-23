<?php
	if (isset($result)):?>
		<h2><?php echo $result; ?><h2>
<?php endif;?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/style.css">
		<title>Регистрация</title>
	</head>
	<body>
	<table class="main_page">
		<tr>
			<td class=header colspan="2">
				<?php
					include('../template/header.php');
				?>
			</td>	
		</tr>
		<tr>
			<td class="sub1">	
				<p>Моментальная регистрация</p>
				<form method="POST" action="comfirm.php">
					<br>Введите адрес email<br><input type="text" name="email">
					<br>Введите логин<br><input type="text" name="login">
					<br>Введите пароль<br><input type="text" name="pass">
					<br>Введите дату рождения <br><input type="text" name="birthday">
					<br><input type="submit" name="подтвердить">
				</form>
			</td>
			<td class="sub2">
					<p>Настоятельно рекомендуем Вам потратить минут 20-30 своего рабочего или личного времени на регистрацию на нашем сайте.</p>
					<p>В ответ мы обещаем Вам каждый день напоминать о нас ежедневной рассылкой с новыми фичами и акционными предложениями.</p>
					<img align"="middle" src="../images/ring.jpg" alt="ring">
			</td>
		</tr>
		<tr>
			<td class="footer" colspan="2">
				<?php 
					include('../template/footer.php');
				?>
			</td>
		</tr>
	</table>
	</body>
</html>