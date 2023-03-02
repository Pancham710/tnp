<?php 
session_start();
require('../connection.php'); 

if(!isset($_SESSION["student_email"])){
    header('location: ./studentLogin.php?error=Please login before accessing the page.');
    exit;
    
    
}
    $sql = "SELECT StudentName FROM studentprofiles WHERE EmailId = '" . $_SESSION["student_email"] . "'";
    $result = $conn->query($sql);

    $user_name = $result->fetch_assoc()["StudentName"];


      
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student | Question Banks</title>
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
                    
                    
                </ul>
            
                    <a href="../index.php">    
                            <button style="background: red; color: white; border-radius: 5px; border-color: red; padding: 5px 5px 5px 5px;"> Logout </button>
                        </a>
                
            </div>
        </div>
    </nav>
    <b style="font-size:20px;margin:20px;"><?php echo $user_name; ?></b>
    <div class="col-12">
        <div>
            <div class="card mt-4 border-top ">
                <div class="card-header text-center">
                    <h2>Question Banks</h2>
                </div>
            </div>
        </div>
    </div>


    <table class="table text-center mt-3" >
        <thead class="table-dark">
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">Company Name</th>
                <th scope="col">Question Bank Link</th>
            </tr>
        </thead>
            <tbody>
                <?php
                    $sql="select ID, CompanyName from questionbank"; 
    
                    $result = mysqli_query($conn, $sql);
                    $no=0;
                    while($row = mysqli_fetch_array($result))
                    {
                        $no+=1;
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$row['CompanyName'].'</td>';
                        echo '<td>'.'<a href="./studentQuestionBankShow.php?id='.$row['ID'].'"><button type="button" class="btn btn-success">View</button></a>'.'</td>';
                    
                    }
            ?>

            </tbody>
        </table>
            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>