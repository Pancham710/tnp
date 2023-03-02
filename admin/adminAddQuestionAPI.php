<?php 

session_start(); 

include "../connection.php";

$companyid = $_POST["companyid"];
$questions = $_POST["questions"];
if(strlen($companyid) > 0 && strlen($questions) > 0){
    $sql_query = "UPDATE questionbank SET Questions='questions' WHERE id=".$companyid."";

    if ($conn->query($sql_query) === TRUE) {
        header('location: ./adminUpdateQuestionBank.php');
        exit;
    } else {
        header('location: ./adminAddQuestion.php?error=Something went wrong.');
        exit;
    }

} else {
    header('location: ./adminAddQuestion.php?error=Please fill all the details.');
    exit;
}
 