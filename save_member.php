<?php
// starting the session
session_start();

// including the database connection
require_once 'conn.php';

if (isset($_POST['register'])) {
    // Setting variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    // Check if the username already exists
    $query = "SELECT COUNT(*) as count FROM `member` WHERE `username` = :username";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $row = $stmt->fetch();

    if ($row['count'] > 0) {
        // User already exists, display an error message
        $_SESSION['error'] = "Usuário já existe. Por favor, escolha um nome de usuário diferente.";
		header('location:register.php');
    } else {
        // Insertion Query
        $insertQuery = "INSERT INTO `member` (username, password, firstname, lastname) VALUES(:username, :password, :firstname, :lastname)";
        $insertStmt = $conn->prepare($insertQuery);
        $insertStmt->bindParam(':username', $username);
        $insertStmt->bindParam(':password', $password);
        $insertStmt->bindParam(':firstname', $firstname);
        $insertStmt->bindParam(':lastname', $lastname);

        // Check if the execution of the query is successful
        if ($insertStmt->execute()) {
            // Account created successfully
            // $_SESSION['success'] = "Account created successfully.";

            // Delayed redirection using JavaScript
            echo "<script>
                setTimeout(function () {
                    window.location.href = 'conta_criada.php';
                }, 1000); // 1000 milliseconds (1 second) delay before redirection
            </script>";
        }
    }
}
?>

