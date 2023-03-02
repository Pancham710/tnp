<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

</html>

<?php
require('../connection.php');

if (isset($_POST['AddAdmin'])) {
    $Name = $_POST['adminnameid'];
    $Email = $_POST['adminemailid'];
    $Username = $_POST['adminusernameid'];
    $Password = $_POST['adminpasswordid'];
    $Contact = $_POST['admincontactid'];

    // if((strlen($Name)  > 0) && strlen($Email)  > 0 && strlen($Username)  > 0 && strlen($Password)  > 0 && strlen($Contact)  > 0){
    //     // Nothing
    // } else {
    //     die("Please fill all the details. <a href='./adminAddAdmin.php'>Click Here</a> to go back.");
    // }

    if ((strlen($Name)  > 0) && strlen($Email)  > 0 && strlen($Username)  > 0 && strlen($Password)  > 0 && strlen($Contact)  > 0) {
        // Nothing
    } else {
        header('location: ./adminAddAdmin.php?error=Please Fill All Details');
        exit;
    }


    
     


    $sql = "SELECT id  FROM admins WHERE email = '".$Email."'";
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
        header('location: ./adminAddAdmin.php?error=Email already Exists');
        exit;
    }
    $sql_query = "INSERT INTO  admins (adminname,email,username,adminpassword,Contact)
    VALUES('$Name', '$Email', '$Username', '$Password', '$Contact')";

    if ($conn->query($sql_query) === TRUE) {
?>
        <div class="card-body text-center" style="margin-top: 15%">
            <div class="m-2">

                <h3> Admin Added Successfully </h3>
                <a href="./adminDashboard.php">
                    <button type="button" class="btn btn-lg btn-info" style="width:50%;">Go To Dashboard</button>
                </a>
            </div>
        </div>
<?php

        // header("Location: ./adminDashboard.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
