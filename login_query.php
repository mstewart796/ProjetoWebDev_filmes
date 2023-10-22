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
			// Redirect to test_home.php after a 3-second delay
			echo '<script>
			setTimeout(function() {
				window.location.href = "test_home.php";
			}, 1000); // 1000 milliseconds (1 second)
		</script>';
		}else{
			$_SESSION['error'] = "Invalid username or password";
			header('location:test_login.php');
		}
	}
?>
