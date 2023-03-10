<?php 
session_start();

if(!isset($_SESSION["hr_email"])){
    header('location: ./hrlogin.php?error=Please login before accessing the page.');
    exit;
}
?>
<?php
    require('../connection.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>HR | Dashboard</title>
    
</head>

<body>
<nav class="navbar navbar-expand-lg   navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PESMCOE TNP</a>
            

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

    <div class="col-12">
        <div>
            <div class="card mt-4 border-top ">
                <div class="card-header text-center">
                    <h2>PESMCOE Training And Placement Management System <br>
                        HR Dashboard
                    </h2>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
    </div>
    <div class="col-2">
    </div>
    <div class="container">


    <div class="row">
            
            <div class="col-12">
                <div>
                    <div class="card mt-4 border-top ">
                        <div class="card-header text-center">
                            <h2>Student Details</h2>
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
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Branch</th>
                
                <th scope="col">SSC</th>
                <th scope="col">HSC / Diploma</th>
                <th scope="col">UG</th>
                <!-- <th scope="col">Download Resume</th> -->


            </tr>
        </thead>
        <tbody>
        <?php
                    $company_id =13;
                    $sql="select studentprofiles.StudentName from studentprofiles INNER JOIN  appliedcompanies ON studentprofiles.ID = appliedcompanies.student_id WHERE appliedcompanies.company_id = 13"; 
    
                    
                    $result = $conn->query($sql);
                    $no = 1;
                    var_dump($result);
                    if($result){
                    while($row = mysqli_fetch_array($result))
                    {
                        echo '<tr>';
                        echo '<td>' . $no . '</td>';
                        echo '<td>'.$row['StudentName'].'</td>';
                        // echo '<td>'.$row['EmailId'].'</td>';
                        // echo '<td>'.$row['ContactNumber'].'</td>';
                        // echo '<td>'.$row['Branch'].'</td>';
                        // echo '<td>'.$row['SSCPercentage'].'</td>';
                        // echo '<td>'.$row['DiplomaHSCPercentage'].'</td>';
                        // echo '<td>'.$row['AggregatePercentage'].'</td>';
                        // echo '<td>'.$row['ProfileImage'].'</td>';
                        // echo '<td>'.$row['Resumes'].'</td>';
                        $no += 1;
                    
                    }
                }
                    
        ?>
                

            </tbody>
        </table>

    

        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>