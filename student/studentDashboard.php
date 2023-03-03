<?php 
session_start();

if(!isset($_SESSION["student_email"])){
    header('location: ./studentLogin.php?error=Please login before accessing the page.');
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
    <title>Register</title>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg   navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PESMCOE TNP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">My Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./studentProfile.php" > My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./resume.php" > Create Resume</a>
                    </li>
                </ul>

                    <a href="../index.php">    
                            <button style="background: red; color: white; border-radius: 5px; border-color: red; padding: 5px 5px 5px 5px;"> Logout </button>
                        </a>
                
            </div>
        </div>
    </nav>

    <div class="col-12">
        <div>
            <div class="card mt-4 border-top ">
                <div class="card-header text-center">
                    <h2>PESMCOE Training And Placement Management System <br>
                        Student Dashboard
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-evenly mt-5">

        <div class="row text-center">
            <div class="col-sm-6">
                <div class="card  float-end m-2" style="width:26rem;">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Apply Company</h5>
                        <p class="card-text">Apply For Drives of Company You Are Eligible For</p>
                        <a href="./studentApplyCompany.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card m-2" style="max-width:26rem;">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Applied Companies</h5>
                        <p class="card-text">View All Companies You Applied For</p>
                        <a href="./studentAppliedCompany.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-6">
                <div class="card  float-end m-2" style="width:26rem;">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Track Progress</h5>
                        <p class="card-text">Check Your Status For Applied Drives</p>
                        <a href="./studentTrackProgress.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card m-2" style="max-width:26rem;">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Question Bank</h5>
                        <p class="card-text">View Previously Asked Questions</p>
                        <a href="./studentQuestionBank.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>