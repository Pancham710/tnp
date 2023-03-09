<?php 

session_start(); 

include "../connection.php";

 

if(isset($_POST["old_password"]) && isset($_POST["new_password"])){
    $Old_password = $_POST["old_password"];
    $New_password  = $_POST["new_password"];
    $Email=$_SESSION["admin_email"] ;
    $sql = "SELECT id  FROM adminlogin WHERE email = '".$Email."' AND password = '".$Old_password."' " ;
    $result = $conn->query($sql);
    $sql1 = "SELECT id  FROM admins WHERE email = '".$Email."' AND adminpassword = '".$Old_password."' " ;
    $result1 = $conn->query($sql1);
    $admin_id = $result->fetch_assoc()["id"];
    $admin1_id = $result1->fetch_assoc()["id"];


    if ($result->num_rows > 0 || $result1->num_rows > 0 ) {
        //Login Success
        $sql = "UPDATE adminlogin SET password = '$New_password' WHERE id = $admin_id"; 
        $conn->query($sql);
        $sql1 = "UPDATE admins SET password = '$New_password' WHERE id = $admin1_id"; 
        $conn->query($sql1);
        header('location: ./adminDashboard.php');
    } else {
        //Login Fail
        header('location: ./adminChangePassword.php?error=Old password is wrong');
        exit;
    }

    
} else {
    header('location: ./adminChangePassword.php?error=Please Fill All The Details');
    exit;
}
?>