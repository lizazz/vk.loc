<?php
	include('controller/user.php');
	$rout=$_GET['rout'];
	$action=$_GET['action'];
	
	$object=new $rout;
	$object->{$action}();
?>