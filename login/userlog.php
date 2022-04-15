<?php
	
	require '../db.php';

	$log = $_POST['login'];
	$pwd = $_POST['password'];

	$loggedin = false;
	$account = getAll();

	$role = getRoleByLogin($log);
	foreach ($account as $acc) {
		if (!empty($log) && !empty($pwd)) {
			if ($log == $acc['login'] && $pwd == $acc['password']) {
					if($role['role_name']=="admin"){
							$loggedin = true;
							session_start();
							$_SESSION['User_Id'] = $acc['id'];
							setcookie('acc_login', $acc['login'], time()+60*60);
							setcookie('acc_password', $acc['password'], time()+60*60);
							header ("Location: adminpage.php");
					}else if($role['role_name']=="moderator"){
							$loggedin = true;
							session_start();
							$_SESSION['User_Id'] = $acc['id'];
							setcookie('acc_login', $acc['login'], time()+60*60);
							setcookie('acc_password', $acc['password'], time()+60*60);
							header ("Location: moderatorpage.php");
					}else{
							$loggedin = true;
							session_start();
							$id = $acc['id'];
							$_SESSION['User_Id'] = $acc['id'];
							setcookie('acc_login', $acc['login'], time()+60*60);
							setcookie('acc_password', $acc['password'], time()+60*60);
							header ("Location: http://localhost/cinema/mainpage.php?id=$id");	
					}
			}	
		}	
	}


	if ($loggedin == false) {
		header ("Location: index.php?notlogged");
	}	

?>