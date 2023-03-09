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
                        <a class="nav-link" href="./adminViewStatistics.php" > View Statistics</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="./adminViewDatabase.php" > View Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./adminChangePassword.php" > Change Password</a>
                    </li>
                </ul>

                    <a href="../homepage.php">    
                            <button style="background: red; color: white; border-radius: 5px; border-color: red; padding: 5px 5px 5px 5px;"> Logout </button>
                        </a>
                
            </div>
        </div>
    </nav>

<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("example2");
        tr = table.getElementsByTagName("tr");
        
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
 

</script>
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
                <input class="form-control me-2" type="search" id ="myInput" onkeyup="myFunction()" placeholder="Search by Student Name ....." aria-label="Search" style="max-width: 35rem">
                <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <a href="export.php"><button type="submit1" name='export_excel_btn' class="btn btn-primary m-2" style="margin-top:-20px;float:right;">Export to Excel</button></a>

        <table id="example2" class="table text-center mt-3" >
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
                    $no = 1;

                    while($row = mysqli_fetch_array($result))
                    {
                        echo '<tr>';
                        echo '<td>' . $no . '</td>';
                        echo '<td>'.$row['StudentName'].'</td>';
                        echo '<td>'.$row['CompanyName'].'</td>';
                        echo '<td>'.$row['Package'].'</td>';
                        echo '<td>'.$row['ContactNumber'].'</td>';
                        echo '<td>'.$row['YOP'].'</td>';
                        echo '<td>'.$row['Branch'].'</td>';
                        // echo '<td>'.$row['ProfileImage'].'</td>';
                        // echo '<td>'.$row['Resumes'].'</td>';
                        $no += 1;
                    
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
