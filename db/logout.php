<?php  
    // destroy the current session and redirect to homepage
    session_start(); 
    session_destroy(); 
    header("Location: ../index.php");  
?>  