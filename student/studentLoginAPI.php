<?php 

session_start(); 

include "../connection.php";

 

if(isset($_POST["email"]) && isset($_POST["password"])){
    $Email = $_POST["email"];
    $Password  = $_POST["password"];
    $sql = "SELECT id  FROM studentlogin WHERE email = '".$Email."' AND password = '".$Password."' " ;
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
        //Login Success
        $_SESSION["student_email"] = $Email;
        header('location: ./studentDashboard.php');
    } else {
        //Login Fail
        header('location: ./studentLogin.php?error=Invalid Credentials');
        exit;
    }
} else {
    header('location: ./studentLogin.php?error=Please Fill All The Details');
    exit;
}
?>