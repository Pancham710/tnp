<?php 

session_start(); 

include "../connection.php";

 

if(isset($_POST["email"]) && isset($_POST["password"])){
    $Email = $_POST["email"];
    $Password  = $_POST["password"];
    $sql = "SELECT id  FROM hrlogin WHERE email = '".$Email."' AND password = '".$Password."' " ;
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
        //Login Success
        $_SESSION["hr_email"] = $Email;
        header('location: ./hrDashboard.php');
    } else {
        //Login Fail
        header('location: ./hrlogin.php?error=Invalid Credentials');
        exit;
    }
} else {
    header('location: ./hrlogin.php?error=Please Fill All The Details');
    exit;
}
?>