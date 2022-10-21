<?php
    require_once "db_conn.php";

    // get username of the active session
    session_start();
    $username = $_SESSION["username"];

    // get inputs
    $password = trim($_POST["password"]);

    $err = "";

    // prepare sql statement to select password from a row with matching username
    if ($stmt = $conn->prepare("SELECT password FROM users WHERE username = ?")) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();        
        $stmt->bind_result($dbPassword);
        $stmt->fetch();
        // verify password
        if (password_verify($password, $dbPassword)) {
            // query to delete a row 
            $query = $conn->prepare("DELETE FROM users WHERE username = ?");
            $query->bind_param("s", $username);
            $query->execute();
            $query->close();
            // close session and redirect
            session_destroy(); 
            header("location: ../index.php");
        } else {
            $err .= "<p class='card-text text-danger pt-2'>Incorrect password.</p>";
            $_SESSION["msg2"] = $err;
            header("location: ../profile.php");
            exit;
        }

        $stmt->close();
    }
   
    mysqli_close($conn);
?>