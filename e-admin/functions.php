<?php
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	if ($_SERVER['SERVER_NAME'] == 'localhost') {
	$db = mysqli_connect('localhost', 'root', '', 'efone');
	}else {
	$db = mysqli_connect('localhost', 'legendup_prenero', 'Prenero1102/*', 'legendup_efone');	
	}
	


	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$crow = mysqli_fetch_array($results);
				$_SESSION['first_name'] = $crow['first_name'];
				$_SESSION['last_name'] = $crow['last_name'];
				$_SESSION['user_id'] = $crow['user_id'];
				$_SESSION['user_pic'] = $crow['user_pic'];
				$_SESSION['user_role'] = $crow['user_role'];
				
				$_SESSION['success'] = "You are now logged in";
				header('location: dashboard.php');
			}else {
			//	array_push($errors, "Wrong username/password combination");
				echo "<script>alert('Wrong username/password combination.')</script>";
		echo "<script> location.replace('index.php'); </script>";
			}
		}
	}

?>