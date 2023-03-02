
<?php
    require('../connection.php');
    session_start();

    if(!isset($_SESSION["admin_email"])){
        header('location: ./adminLogin.php?error=Please login before accessing the page.');
        exit;
    }
?>

<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Admin | Add Admin </title>
</head>

<body>
<form method="post" action="./adminAddAdminAPI.php">
    <div class="container">


    <div class="row">
            <div class="col-2">

            </div>
    </div>

        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <div>
                    <div class="card mt-4 border-top  border-primary">
                        <div class="card-header text-center">
                            <h4>Add Admin</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="adminnameid" class="form-label"> Name: </label>
                                <input type="text" class="form-control" name="adminnameid" placeholder="Enter Name" required>
                            </div>

                            <div class="mb-3">
                                <label for="adminemailid" class="form-label"> Email: </label>
                                <input type="email" class="form-control" name="adminemailid" placeholder="Enter Email" required>
                            </div>

                            <div class="mb-3">
                                <label for="adminusernameid" class="form-label"> Username: </label>
                                <input type="text" class="form-control" name="adminusernameid" placeholder="Enter Username" required >
                            </div>

                            <div class="mb-3">
                                <label for="adminpasswordid" class="form-label"> Set Password: </label>
                                <input type="password" class="form-control" name="adminpasswordid" placeholder="Enter Password" required>
                            </div>

                            <div class="mb-3">
                                <label for="admincontactid" class="form-label"> Contact: </label>
                                <input type="number" class="form-control" name="admincontactid" pattern="[0-9]{10}" placeholder="Enter Contact Number" required>
                                <small>Format: 1234567890</small>


                            </div>  
                           
                        </div>
            <?php 
            if(isset($_GET["error"])){
                echo '<center style="color:red;font-weight:700;font-size:17px;">ERROR: '.$_GET["error"].'</center>';
            }
            ?> 
                        <div class="card-body text-center">
                            <div class="m-2">
                                    <button type="submit" class="btn btn-lg btn-info" name="AddAdmin" style="width:50%;">Submit</button>
                            </div>
                            
                            <div class="m-2"> 
                                <a href="./adminDashboard.php">
                                    <button type="button" class="btn btn-lg  btn-info" style="width:50%;">Cancel</button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-2">

            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</form>
</body>

</html>
