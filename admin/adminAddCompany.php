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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Admin | Add Company Details </title>
</head>

<body>
    <div class="container">


    <div class="row">
            <div class="col-2">

            </div>
    </div>

    <form method="post" action="adminAddCompanyAPI.php" > 
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <div>
                    <div class="card mt-4 border-top  border-primary">
                        <div class="card-header text-center">
                            <h4>Add Company Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="companynameid" class="form-label"> Company Name: </label>
                                <input type="text" class="form-control" name="companynameid" placeholder="Enter Company Name">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="jobroleid" class="form-label"> Job Role: </label>
                                <input type="text" class="form-control" name="jobroleid" placeholder="Enter Job Role">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="joblocationid" class="form-label"> Job Location: </label>
                                <input type="text" class="form-control" name="joblocationid" placeholder="Enter Job Location">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="packageid" class="form-label"> Package(CTC): </label>
                                <input type="number" step="0.01" class="form-control" name="packageid" placeholder="Enter Package(CTC)">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="immediatejoiningid" class="form-label"> Immediate Joining: </label>
                                <select class="form-select" name="immediatejoiningid">
                                    <option selected disabled>Select Yes/No</option>
                                    <option value="Y">Yes</option>
                                    <option value="N">No</option>
                                </select>
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="registrationstartdateid" class="form-label"> Registration Start Date: </label>
                                <input type="date" class="form-control" name="registrationstartdateid">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="registrationenddateid" class="form-label"> Registration End Date: </label>
                                <input type="date" class="form-control" name="registrationenddateid">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="sscpercentageid" class="form-label"> Eligibility Criteria - 10th Percentage: </label>
                                <input type="number" step="0.01" class="form-control" name="sscpercentageid" placeholder="Enter Minimum 10th Percentage Required">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="hscpercentageid" class="form-label"> Eligibility Criteria - 12th Percentage: </label>
                                <input type="number" step="0.01" class="form-control" name="hscpercentageid" placeholder="Enter Minimum 12th Percentage Required">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="aggregatepercentageid" class="form-label"> Eligibility Criteria - Graduation Till Date Aggregate Percentage: </label>
                                <input type="number" step="0.01" class="form-control" name="aggregatepercentageid" placeholder="Enter Minimum Graduation Till Date Aggregate Percentage Required">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="diplomapercentageid" class="form-label"> Diploma Percentage: </label>
                                <input type="number" step="0.01" class="form-control" name="diplomapercentageid" placeholder="Enter Diploma Percentage">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="gapallowedid" class="form-label"> Eligibility Criteria - Gap Allowed? : </label>
                                <select class="form-select" name="gapallowedid">
                                    <option selected disabled>Select Yes/No</option>
                                    <option value="Y">Yes</option>
                                    <option value="N">No</option>
                                </select>
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="passoutyearid" class="form-label"> Eligibility Criteria - Passout Year: </label>
                                <input type="number" step="1" class="form-control" name="passoutyearid" placeholder="Enter Passout Year" Required>
                            </div>
                            <br>
                            
                            <div class="mb-3">
                                <label class="form-label"> Eligibility Criteria - Applicable Branches / Streams: </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Information Technology" name="Streams[]"> Information Technology
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Computer Science" name="Streams[]"> Computer Science
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Electrical" name="Streams[]"> Electrical
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Mechanical" name="Streams[]"> Mechanical
                                </div>


                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Electronic And Telecommunication" name="Streams[]"> Electronic And Telecommunication
                                </div>
                                    
                            </div>
                            <br>
  
                        </div>

                        <div class="card-body text-center">
                            <div class="m-2">
                                    <button type="submit" class="btn btn-lg btn-info" style="width:50%;" name="AddCompany">Submit</button>
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

</form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
