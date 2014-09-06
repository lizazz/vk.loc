<?php session_start(); ?>
<?php 
include ('classes/user.php');
var_dump ($_SESSION);
if (!empty($_POST)){
		$user=new User();
		if ($_POST['auth'] =='registration'){
			$user->registration($_POST);} 
		elseif($_POST['auth']=='auth'){
			$user->auth($_POST['login'], $_POST['pass']);
		}
		$result=$user->result;
	}
?>
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
			<section class="main">
				<?php if(empty($_SESSION['email'])):?>
					<?php include ('template/registration.php'); ?>
					<?php include ('template/auth.php');?>
				<?php else: ?>
					<?php echo 'Hello ' .$_SESSION['login'] ?>
				<?php endif ?>
			</section>
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