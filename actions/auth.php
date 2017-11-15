<?php
	$link = mysqli_connect("localhost", "root", "0202", "base");
	if(isset($_POST['btn'])){
		if($_POST['login'] && $_POST['password']){
			$login = $_POST['login']; $password = $_POST['password'];
			$query = mysqli_query($link, "SELECT * FROM users WHERE login = '$login' AND password = '$password' AND admin = 1");
			$res = mysqli_num_rows($query);
			if($res > 0){
				$q = mysqli_fetch_assoc($query);
				$user_id = $q['id'];
				setcookie("user_id", $user_id, time()+3600*24*365, "/");
				$pass = md5(microtime());
				mysqli_query($link, "INSERT INTO passwords VALUES(null, $user_id, '$pass')");
				setcookie("temp_pass", $pass, time()+3600*24*365, "/");
				header('Location: ../pages/forum.php');
			}else{
				$err = "<p style='color:red;'>Неверные логин и/или пароль</p>";
			}
		}else{
			$err = "<p style='color:red;'>Заполните все поля</p>";
		}
	}

?>