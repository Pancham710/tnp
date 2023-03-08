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
    <title>Previous Questions</title>
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
                        <a class="nav-link " aria-current="page" href="./studentDashboard.php">My Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./studentProfile.php" > My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./resume.php" > Create Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./changePassword.php" > Change Password</a>
                    </li>
                    
                    
                </ul>
                <form class="d-flex">

                    <button class="btn btn-outline-danger" type="Logut">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <b style="font-size:20px;margin:20px;"><?php echo $user_name; ?></b>
        <div class="row text-center mt-4 ">
            
                    <div class="col-sm-4 ">
                        <h2>Cognizant</h2>

                        
                    </div>
                    <div class="col-sm-4 ">
                            <h3>Genc , elvate , Genc Pro</h3>    
                    </div>
                    <div class="col-sm-4 ">
                    
                    <button type="button" class="btn btn-outline-success">Download</button>
                    </div>
                    
        </div>
            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>