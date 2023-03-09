<?php 

session_start(); 

include "../connection.php";

 

if(isset($_POST["old_password"]) && isset($_POST["new_password"])){
    $Old_password = $_POST["old_password"];
    $New_password  = $_POST["new_password"];
    $Email=$_SESSION["student_email"] ;
    $sql = "SELECT id  FROM studentlogin WHERE email = '".$Email."' AND password = '".$Old_password."' " ;
    $result = $conn->query($sql);
    $student_id = $result->fetch_assoc()["id"];

    if ($result->num_rows > 0) {
        //Login Success
        $sql = "UPDATE studentlogin SET password = '$New_password' WHERE id = $student_id"; 
        $conn->query($sql);
        
       
        header('location: ./studentDashboard.php');
    } else {
        //Login Fail
        header('location: ./changePassword.php?error=Old Password is wrong');
        exit;
    }
} else {
    header('location: ./changePassword.php?error=Please Fill All The Details');
    exit;
}
?>