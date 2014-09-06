<?php
include ('../classes/user.php');
if (!empty($_POST)){
		//var_dump($_POST);
		$user=new User();
		$user->registration($_POST);
		$result=$user->result;
		
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/style.css">
		<title>Подтверждение регистрации</title>
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
				<img align="middle" src="../images/dog.jpg" width="220px" hight="220px" alt="dog">
		
			</td>
			<td class="sub2">
				<h2>Регистрация прошла удачно</h2>
				<?php
					echo "Добрый день, ".  $_POST['login'];
					echo "<br>Поздравляем Вас с удачной регистрацией <br> После проверки администратором данные по доступу будут высланы в виде электронного письма на Ваш адрес ".  $_POST['email'];
					
				?>
				<img align="middle" src="../images/moderator.jpg" alt="moderator">
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