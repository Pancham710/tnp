<?php 
session_start();
require('../connection.php');

if(!isset($_GET["company_id"])){
    die('Something Went Wrong..');
}

if(!isset($_GET["student_id"])){
    die('Something Went Wrong..');
}

$company_id = $_GET["company_id"];
$student_id = $_GET["student_id"];

$sql_query = "INSERT INTO  appliedcompanies (student_id,company_id)
VALUES('$student_id', '$company_id')";
 
 try {
    if ($conn->query($sql_query) === TRUE) {
        echo "Applied For Company.<br><br>";
        echo "<a href='./studentApplyCompany.php'>GO BACK</a>";
    } else {
        echo "Error: " . $sql_query . "<br>" . $conn->error;
    }
} catch (Exception $e) {
    if ($e->getCode() == 1062) {
        // Handle duplicate entry error
        echo "You have already applied for this company.<br>";
        echo "<a href='./studentApplyCompany.php'>GO BACK</a>";
    } else {
        echo "Error: " . $e->getMessage();
    }
}

?>  