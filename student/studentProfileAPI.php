<?php
session_start();
require('../connection.php');

if (isset($_POST['MyProfile'])) {
    $StudentName = $_POST['studentnameid'];
 
    $Contact = $_POST['contactnumberid'];
    $AlternateContact = $_POST['alternatecontactnumberid'];
    $FatherName = $_POST['fathernameid'];
    $MotherName = $_POST['mothernameid'];
    $DOB = $_POST['dobid'];
    $PRN = $_POST['prnnumberid'];
    $Branch = $_POST['branchid'];
    $YOP = $_POST['yopid'];
    $CurrentSemester = $_POST['currentsemesterid'];
    $SSCPercentage = $_POST['sscpercentageid'];
    $DiplomaHSC = $_POST['hscdiplomaid'];
    $DiplomaHSCPercentage = $_POST['diplomahscpercentageid'];
    $AggregatePercentage = $_POST['aggregatepercentageid'];
    $ProfilePicture = $_FILES['profilepictureid']['name'];
    $ProfilePictureTempName = $_FILES['profilepictureid']['tmp_name'];
    $ProfilePictureFolder = "./ProfilePictures/" . $ProfilePicture;

    $Resume = $_FILES['resumeid']['name'];
    $ResumeTempName = $_FILES['resumeid']['tmp_name'];
    $ResumeFolder = "./Resumes/" . $Resume;
    if($_FILES['resumeid']['size'] > 5000000){
        header('location: ./studentProfile.php?error=Resume size is too large.');
        exit;
    }
    if ((strlen($StudentName)  > 0)    && (strlen($FatherName)  > 0) && (strlen($MotherName)  > 0) && (strlen($DOB)  > 0) && (strlen($PRN)  > 0 )&& strlen(($Branch)  > 0) && strlen(($YOP)  > 0) && (strlen($CurrentSemester)  > 0) && (strlen($SSCPercentage)  > 0 )&& (strlen($DiplomaHSC)  > 0) && (strlen($AggregatePercentage)  > 0 )) {
        // Nothing
 
    } else {
        header('location: ./studentProfile.php?error=Please Fill All Details');
        exit;
    }
  
    $Email = $_SESSION["student_email"];
    $sql_query = "INSERT INTO  studentprofiles (StudentName,EmailId,ContactNumber,AlternateContactNumber,FatherName,MotherName,DOB,PRN,Branch,YOP,CurrentSemester,SSCPercentage,DiplomaHSC,DiplomaHSCPercentage,AggregatePercentage, ProfileImage, Resumes) VALUES('$StudentName', '$Email', '$Contact', '$AlternateContact', '$FatherName', '$MotherName', '$DOB', '$PRN', '$Branch', '$YOP','$CurrentSemester', '$SSCPercentage','$DiplomaHSC', '$DiplomaHSCPercentage', '$AggregatePercentage', '$ProfilePicture', '$Resume')";

    if ($conn->query($sql_query) === TRUE) {
        
        
        
        echo "New record created successfully";
        // move_uploaded_file($_FILES['profilepictureid']['tmp_name'], './student/ProfilePictures/'.$_FILES['profilepictureid']);
        move_uploaded_file($ProfilePictureTempName, $ProfilePictureFolder);
        move_uploaded_file($ResumeTempName, $ResumeFolder);
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
