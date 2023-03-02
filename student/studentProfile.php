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
    <title>Student | My Profile</title>
</head>

<body>
<div class="container">
    <form action="./studentProfileAPI.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <div>
                
                    <div class="card mt-4 border-top  border-primary">
                    
                        <div class="card-header text-center">
                            <h4>My Profile</h4>
                        </div>
                        <div class="card-body text-left">
                        <form action="./studentProfileAPI.php" method="post">
                            <div class="mb-3">
                                <label for="studentnameid" class="form-label">Student Name</label>
                                <input type="text" class="form-control" name="studentnameid" aria-describedby="emailHelp" required>
                                
                            </div>
                            <div class="mb-3">
                                <label for="emailid" class="form-label">Email-ID</label>
                                <input type="email" class="form-control" name="emailid" aria-describedby="emailHelp" required>
                                
                            </div>
                            <div class="mb-3">
                                
                                <label for="contactnumberid" class="form-label">Contact Number.</label>
                                
                                <input type="number" class="form-control" name="contactnumberid" pattern="[0-9]{10}" placeholder="Enter Contact Number" required>
                                <small>Format: 1234567890</small>
                            </div>
                            <div class="mb-3">
                                <label for="alternatecontactnumberid" class="form-label">Alternate Contact Number.</label>
                                <input type="number" class="form-control" name="alternatecontactnumberid" pattern="[0-9]{10}" placeholder="Enter Contact Number" required>
                                <small>Format: 1234567890</small>                   
                            </div>
                            <div class="mb-3">
                                <label for="fathernameid" class="form-label">Father's Name</label>
                                <input type="text" class="form-control" name="fathernameid" aria-describedby="emailHelp" required>
                                
                            </div>
                            
                            <div class="mb-3">
                                <label for="mothernameid" class="form-label">Mother's Name</label>
                                <input type="text" class="form-control" name="mothernameid" aria-describedby="emailHelp" required>
                                
                            </div>
                            
                            <div class="mb-3">
                                <label for="dobid" class="form-label">Date of Birth </label>
                                <input type="date" class="form-control" name="dobid" aria-describedby="emailHelp" required>
                                
                            </div>
                            <div class="mb-3">
                                <label for="prnnumberid" class="form-label">PRN Number</label>
                                <input type="text" class="form-control" name="prnnumberid" aria-describedby="emailHelp" required>
                            </div>

                            <div class="mb-3">
                                <label for="branchid" class="form-label">Select Your Branch</label>
                                <select class="form-select" name="branchid" required>
                                    <option selected disabled>Select Branch</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Mechanical">Mechanical</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="ENTC">Electronic And Telecommunication</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="yopid" class="form-label">Year Of Passing</label>
                                <input type="text" class="form-control" name="yopid" aria-describedby="emailHelp" required>
                                
                            </div>
                            <div class="mb-3">
                                <label for="currentsemesterid" class="form-label">Current Semester</label>
                                <input type="text" class="form-control" name="currentsemesterid" aria-describedby="emailHelp" required>
                                
                            </div>

                            <div class="mb-3">
                                <label for="sscpercentageid" class="form-label">10th Percentage</label>
                                <input type="number" step ="0.01"class="form-control" name="sscpercentageid" aria-describedby="emailHelp" required>
                            </div>

                            <div class="mb-3">
                                <label for="hscdiplomaid" class="form-label">Select HSC / Diploma</label>
                                <select class="form-select" name="hscdiplomaid" required>
                                    <option selected disabled>Select HSC/Diploma</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="HSC">HSC</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="diplomahscpercentageid" class="form-label">Diploma / HSC Percentage</label >
                                <input type="number" step ="0.01" class="form-control" name="diplomahscpercentageid" aria-describedby="emailHelp" required>
                                
                            </div>
                            <div class="mb-3">
                                <label for="aggregatepercentageid" class="form-label">Aggregate Percentage Till Date</label>
                                <input type="number" step ="0.01"class="form-control" name="aggregatepercentageid" aria-describedby="emailHelp" required>
                                
                            </div>
                            <div class="mb-3">
                                <label for="profilepictureid" class="form-label">Upload your Profile Picture (in .png format only) </label>
                                <input class="form-control" type="file" name="profilepictureid" accept="image/x-png,image/gif,image/jpeg" required>
                            </div>
                            <div class="mb-3">
                                <label for="resumeid" class="form-label">Upload Your Updated Resume (in .pdf format only) </label>
                                <input class="form-control" type="file" name="resumeid" accept="application/pdf" required>
                            </div>
                            <?php 
                                if(isset($_GET["error"])){
                                    echo '<center style="color:red;font-weight:700;font-size:17px;">ERROR: '.$_GET["error"].'</center>';
                                }
                            ?>


                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="MyProfile">Submit</button>
                            </div>

                            
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">

           

            </div>
        </div>

        </form>
    </div>

      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>