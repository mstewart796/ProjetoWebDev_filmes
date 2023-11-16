<?php
	session_start();
	require_once 'conn.php';
	
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT COUNT(*) as count FROM `member` WHERE `username` = :username AND `password` = :password";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		$row = $stmt->fetch();
		
		$count = $row['count'];
		
		if($count > 0){
			// Redirect to home.php after a 3-second delay
			echo '<script>
			setTimeout(function() {
				window.location.href = "home.php";
			}, 1000); // 1000 milliseconds (1 second)
		</script>';
		}else{
			$_SESSION['error'] = "Nome de usuário ou senha inválido";
			header('location:login.php');
		}
	}
?>
