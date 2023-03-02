<?php
session_start();

if(!isset($_SESSION["admin_email"])){
    header('location: ./adminLogin.php?error=Please login before accessing the page.');
    exit;
}
?>
<?php
    require('../connection.php');
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Admin | Placed Student Details</title>
</head>
<body>

<div class="container">


    <div class="row">
            
            <div class="col-12">
                <div>
                    <div class="card mt-4 border-top ">
                        <div class="card-header text-center">
                            <h2>Placed Student Details</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">

            </div>
            <div class="col-2">

            </div>
    </div>
</div>

        <form class="d-flex justify-content-center mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search by Company Name / Student Name / Package / Stream..." aria-label="Search" style="max-width: 35rem">
                <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <table class="table text-center mt-3" >
        <thead class="table-dark">
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">Student Name</th>
                <th scope="col">Company Name</th>
                <th scope="col">Package</th>
                <th scope="col">Contact</th>
                <th scope="col">Passout Year</th>
                <th scope="col">Branch</th>

            </tr>
        </thead>
        <tbody>
        <?php
                    $sql="select ID, StudentName, CompanyName, Package, ContactNumber,YOP, Branch from placedstudents"; 
    
                    $result = mysqli_query($conn, $sql);


                    while($row = mysqli_fetch_array($result))
                    {
                        echo '<tr>';
                        echo '<td>'.$row['ID'].'</td>';
                        echo '<td>'.$row['StudentName'].'</td>';
                        echo '<td>'.$row['CompanyName'].'</td>';
                        echo '<td>'.$row['Package'].'</td>';
                        echo '<td>'.$row['ContactNumber'].'</td>';
                        echo '<td>'.$row['YOP'].'</td>';
                        echo '<td>'.$row['Branch'].'</td>';
                        // echo '<td>'.$row['ProfileImage'].'</td>';
                        // echo '<td>'.$row['Resumes'].'</td>';
                    
                    }
                    
        ?>
                

            </tbody>
        </table>
        <br><br>

        <div class="card-body text-center">
            <div class="m-2">
            <a href="./adminAddPlacedStudentDetails.php">
                <button type="button" class="btn btn-lg btn-info" style="width:25%;">Add New Placed Student Details</button>
            </a>
            </div>
                            
            <div class="m-2"> 
                <a href="./adminDashboard.php">
                    <button type="button" class="btn btn-lg  btn-info" style="width:25%;">Go To Dashboard</button>
                </a>
            </div>
        </div>

</body>
</html>