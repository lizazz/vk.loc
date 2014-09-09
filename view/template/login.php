<?php
//session_start();
include ('../../controller/user.php');
if (!empty($_POST)){
		$_SESSION['login']=$_POST['login'];
		$_SESSION['pass']=$_POST['pass'];
		$_SESSION['sesid']=$_POST['sesid'];
		$user=new User();
		$user->auth($_POST['login'],$_POST['pass'],$access);
		$final=$user->access;
		//var_dump($user);
		//echo $final;
	}
?>

<html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/style.css">
		<title>Страница пользователя</title>
	</head>
	<body>
		<table class="main_page">
		<tr>
			<td class=header colspan="2">
				<?php
					include('header.php');
				?>
			</td>	
		</tr>
		<tr>
			<td class="sub1">	
				<img align="middle" src="../../images/dog.jpg" width="220px" hight="220px" alt="dog">
		
			</td>
			<td class="sub2">
				<h2>Страница пользователя</h2>
				<?php
					if ($final):?>
						<?php echo "Доброе утро, " . $_POST['login'] . " Вы ввели правильный пароль и получили доступ к своей персональной странице"; ?>
				<?php else: echo "Вы ввели неправильный Логин или пароль"; endif; ?>
		</td>
		</tr>
		<tr>
			<td class="footer" colspan="2">
				<?php 
					include('footer.php');
				?>
			</td>
		</tr>
	</table>
	</body>
</html>