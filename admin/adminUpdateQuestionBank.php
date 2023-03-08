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
    <title>Admin | Update Question Bank</title>
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
                        <a class="nav-link " aria-current="page" href="./adminDashboard.php">My Dashboard</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="" > View Statistics</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="" > View Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" > Change Password</a>
                    </li>
                </ul>

                    <a href="../index.php">    
                            <button style="background: red; color: white; border-radius: 5px; border-color: red; padding: 5px 5px 5px 5px;"> Logout </button>
                        </a>
                
            </div>
        </div>
    </nav>

<div class="container">


    <div class="row">
            
            <div class="col-12">
                <div>
                    <div class="card mt-4 border-top ">
                        <div class="card-header text-center">
                            <h2> Update Question Banks</h2>
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

        <table class="table text-center mt-3" >
        <thead class="table-dark">
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">Company Name</th>
                <th scope="col">Questions</th>
            </tr>
        </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM questionbank";
                    $query = mysqli_query($conn , $sql);
                    $no =1;

                    while($row= mysqli_fetch_array($query)){
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$row['CompanyName'].'</td>';
                        echo '<td>'.'<a href="./adminAddQuestion.php?id='.$row['ID'].'" style="text-decoration: none; color: black;">Update</a>'.'</td>';
                        echo '</tr>';
                        $no += 1;
                    }
                ?>
               

            </tbody>
        </table>
        
        <br>
        <div class="card-body text-center">
            <div class="m-2"> 
                <a href="./adminCompanyQuestion.php">
                    <button type="button" class="btn btn-lg  btn-info" style="width:25%;">Add new Company questions</button>
                </a>
            </div>
        </div>
        
        <div class="card-body text-center">
            <div class="m-2"> 
                <a href="./adminDashboard.php">
                    <button type="button" class="btn btn-lg  btn-info" style="width:25%;">Go To Dashboard</button>
                </a>
            </div>
        </div>
</body>
</html>

