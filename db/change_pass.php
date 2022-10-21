<?php
    require_once "db_conn.php";

    // get username of the active session
    session_start();
    $username = $_SESSION["username"];

    // get inputs
    $password = trim($_POST["password"]);
    $new_password = trim($_POST["new_password"]);
    $conf_password = trim($_POST["conf_password"]);

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
            // check new passwords (must match, be longer than 8 characters and have both upper and lovercase letters + a number)
            if (!preg_match('/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/', $password)) {
                $err .= "<p class='card-text text-danger pt-2'>Invalid password. Make sure it is longer than 8 characters and contains uppercase and lowercase letters and numbers.</p>";
                $_SESSION["msg"] = $err;
                header("location: ../register.php");
                exit;
            } else if ($new_password != $conf_password) {
                $err .= "<p class='card-text text-danger pt-2'>Passwords didn't match.</p>";
                $_SESSION["msg1"] = $err;
                header("location: ../profile.php");
                exit;
            }   
                  
            // update password
            if (empty($err)) {
                $hash = password_hash($new_password, PASSWORD_BCRYPT);
                // query to update a row 
                $query = $conn->prepare("UPDATE users SET password = ?  WHERE username = ?;");
                $query->bind_param("ss", $hash, $username);
                $query->execute();
                $query->close();
                $_SESSION["msg1"] = "<p class='card-text text-success pt-2'>Password changed successfully.</p>";
                header("location: ../profile.php");
                exit;
            }
        } else {
            $err .= "<p class='card-text text-danger pt-2'>Incorrect password.</p>";
            $_SESSION["msg1"] = $err;
            header("location: ../profile.php");
            exit;
        }
        
        $stmt->close();
    }
   
    mysqli_close($conn);
?>