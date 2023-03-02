<?php 

session_start(); 

include "../connection.php";


$company = $_POST["company"];
$questions = $_POST["questions"];
if(strlen($company) > 0 && strlen($questions) > 0){
    $sql_query = "INSERT INTO  questionbank (CompanyName,Questions)
    VALUES('$company', '$questions')";

    if ($conn->query($sql_query) === TRUE) {
        header('location: ./adminUpdateQuestionBank.php');
        exit;
    } else {
        header('location: ./adminCompanyQuestion.php?error=Something went wrong.');
        exit;
    }

} else {
    header('location: ./adminCompanyQuestion.php?error=Please fill all the details.');
    exit;
}
 