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
                if (isset($_POST['AddPlacedStudent'])) {
                    $StudentName = $_POST['placedstudentnameid'];
                    $CompanyName = $_POST['placedcompanyid'];
                    $Package = $_POST['packageid'];
                    $Contact = $_POST['contactid'];
                    $YOP = $_POST['passoutid'];
                    $Branch = $_POST['branchid'];
                    

                    $sql="INSERT INTO placedstudents(StudentName, CompanyName, Package, ContactNumber,YOP, Branch) VALUES ('$StudentName','$CompanyName','$Package','$Contact','$YOP','$Branch')"; 
    
                    $result = mysqli_query($conn, $sql);
                    
                    if ($conn->query($sql) === TRUE) {
                        ?>
                        <div class="card-body text-center" style="margin-top: 15%">
                                            <div class="m-2">
                                                
                                                <h3> Added Placed Student Details Successfully </h3>
                                                <a href="./adminDashboard.php">
                                                    <button type="button" class="btn btn-lg btn-info" style="width:50%;">Go To Dashboard</button>
                                                </a>
                                            </div>
                        </div>
                        <?php
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                
                    $conn->close();

                    
                }
?>