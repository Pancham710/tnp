<?php
session_start();

require('../connection.php');

if (!isset($_SESSION["student_email"])) {
    header('location: ./studentLogin.php?error=Please login before accessing the page.');
    exit;
}



$sql = "SELECT id FROM studentlogin WHERE email = '" . $_SESSION["student_email"] . "'";
$resulta = $conn->query($sql);

$student_id = (int)$resulta->fetch_assoc()["id"];
 
// Code To Get Username 

$sql = "SELECT StudentName,YOP,AggregatePercentage,DiplomaHSCPercentage,SSCPercentage FROM studentprofiles WHERE EmailId = '" . $_SESSION["student_email"] . "'";
$result = $conn->query($sql);

$user_details = $result->fetch_assoc();
$user_name = $user_details["StudentName"];
$YOP = (int)$user_details["YOP"];
$SSCPercentage = (float)$user_details["SSCPercentage"];
$DiplomaHSCPercentage = (float)$user_details["DiplomaHSCPercentage"];
$AggregatePercentage = (float)$user_details["AggregatePercentage"];

// Code To Get Username End
?>


<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student | Companies To Apply</title>
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
                        <a class="nav-link" href="./studentProfile.php"> My Profile</a>
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
                    <h2>Apply For Drives</h2>
                </div>
            </div>
        </div>
    </div>


    <table class="table text-center mt-3">
        <thead class="table-dark">
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">Company Name</th>
                <th scope="col">Job Role</th>
                <th scope="col">Job Location</th>
                <th scope="col">Package</th>
                <th scope="col">Passout Year</th>
                <th scope="col">Registration Start Date</th>
                <th scope="col">Registration End Date</th>
                <th scope="col">View All Details</th>
                <th scope="col">Apply Now</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select ID, CompanyName,SSCPercentage,HSCPercentage,AggregatePercentage,JobRole,JobLocation,Package,PassoutYear,RegistrationStartDate,RegistrationEndDate from adminaddcompanydetails";

            $result = mysqli_query($conn, $sql);
            $no = 1;
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>';
                echo '<td>' . $no . '</td>';
                echo '<td>' . $row['CompanyName'] . '</td>';
                echo '<td>' . $row['JobRole'] . '</td>';
                echo '<td>' . $row['JobLocation'] . '</td>';
                echo '<td>' . $row['Package'] . '</td>';
                echo '<td>' . $row['PassoutYear'] . '</td>';
                echo '<td>' . $row['RegistrationStartDate'] . '</td>';
                echo '<td>' . $row['RegistrationEndDate'] . '</td>';
                echo '<td>' . '<a href="#" style="text-decoration: none; color: black;">View Details</a>' . '</td>';
                $eligible = true;

                if ((int)$row['PassoutYear'] != $YOP) {
                    $eligible = false;
                }
                if ($SSCPercentage < (float)$row['SSCPercentage']) {
                    $eligible = false;
                }
                if ($DiplomaHSCPercentage < (float)$row['HSCPercentage']) {
                    $eligible = false;
                }
                if ($AggregatePercentage < (float)$row['AggregatePercentage']) {
                    $eligible = false;
                }

                if ($eligible) {
                    echo '<td>' . '<a href="applyCompanyAPI.php?company_id='.$row['ID'].'&student_id='.$student_id.'" ><button type="submit" class="btn btn-outline-success">Apply</button></a>' . '</td>';
                } else {
                    echo '<td style="color:red;">Ineligible</td>';
                }




                $no += 1;
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