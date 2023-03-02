<?php 
session_start();

if(!isset($_SESSION["admin_email"])){
    header('location: ./adminLogin.php?error=Please login before accessing the page.');
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin | Dashboard</title>
    
</head>

<body>
    <div class="col-12">
        <div>
            <div class="card mt-4 border-top ">
                <div class="card-header text-center">
                    <h2>PESMCOE Training And Placement Management System <br>
                        Admin Dashboard
                    </h2>
                    <div class="card float-end ">
                        <a href="../index.php">    
                            <button style="background: red; color: white; border-radius: 5px; border-color: red; padding: 5px 5px 5px 5px;"> Logout </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
    </div>
    <div class="col-2">
    </div>

    <div class="d-flex justify-content-evenly mt-5">

        <div class="row text-center">
            <div class="col-sm-4">
                <div class="card m-2" style="width: 350px;">
                    <div class="card-body bg-light">
                        <h5 class="card-title"> Student Details </h5>
                        <p class="card-text">View Details Of Registered Students</p>
                        <a href="./adminViewStudentDetails.php" class="btn btn-primary"> Click Here </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card m-2 " style="width: 350px;">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Add Admin</h5>
                        <p class="card-text"> Register New Admin</p>
                        <a href="./adminAddAdmin.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card m-2" style="width: 350px;">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Add Company Details</h5>
                        <p class="card-text"> Add New Company Drive Details </p>
                        <a href="./adminAddCompany.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="d-flex justify-content-evenly mt-5">

        <div class="row text-center ">
            <div class="col-sm-4">
                <div class="card m-2 " style="width: 350px;">
                    <div class="card-body bg-light">
                        <h5 class="card-title"> Company Details</h5>
                        <p class="card-text">View Details Of All Companies</p>
                        <a href="./adminViewCompanyDetails.php" class="btn btn-primary"> Click Here </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card m-2 " style="width: 350px;">
                    <div class="card-body bg-light">
                        <h5 class="card-title"> Placed Student Details</h5>
                        <p class="card-text"> View / Add Placed Student Details</p>
                        <a href="adminViewPlacedStudent.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card m-2" style="width: 350px;">
                    <div class="card-body bg-light">
                        <h5 class="card-title"> Question Bank </h5>
                        <p class="card-text"> Update Question Bank  </p>
                        <a href="adminUpdateQuestionBank.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>