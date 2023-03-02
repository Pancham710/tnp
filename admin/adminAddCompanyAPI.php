<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
</html>

<?php
require('../connection.php');

if (isset($_POST['AddCompany'])) {
    $CompanyName = $_POST['companynameid'];
    $JobRole = $_POST['jobroleid'];
    $JobLocation = $_POST['joblocationid'];
    $Package = $_POST['packageid'];
    $ImmediateJoining = ($_POST['immediatejoiningid'] == "Yes") ? 1 : 0;
    $RegistrationStartDate = $_POST['registrationstartdateid'];
    $RegistrationEndDate = $_POST['registrationenddateid'];
    $SSCPercentage = $_POST['sscpercentageid'];
    $HSCPercentage = $_POST['hscpercentageid'];
    $AggregatePercentage = $_POST['aggregatepercentageid'];
    $DiplomaPercentage = $_POST['diplomapercentageid'];
    $GapAllowed = ($_POST['gapallowedid'] == "Yes" ? 1 : 0);
    $PassoutYear = $_POST['passoutyearid'];

    $checkbox1 = $_POST['Streams'];
    $chk = "";
    foreach ($checkbox1 as $chk1) {
        $chk .= $chk1 . ",";
    }
    $ApplicableBranches = $chk;

    $sql_query = "INSERT INTO  adminaddcompanydetails (CompanyName,JobRole,JobLocation,Package,ImmediateJoining,RegistrationStartDate,RegistrationEndDate,SSCPercentage,HSCPercentage, AggregatePercentage, DiplomaPercentage, GapAllowed	, PassoutYear, ApplicableBranches)
    VALUES('$CompanyName', '$JobRole', '$JobLocation', '$Package', '$ImmediateJoining', '$RegistrationStartDate', '$RegistrationEndDate', '$SSCPercentage', '$HSCPercentage','$AggregatePercentage', '$DiplomaPercentage','$GapAllowed', '$PassoutYear', '$ApplicableBranches')";

    if ($conn->query($sql_query) === TRUE) {
        ?>
        <div class="card-body text-center" style="margin-top: 15%">
                            <div class="m-2">
                                
                                <h3> Company Details Added Successfully </h3>
                                <a href="./adminDashboard.php">
                                    <button type="button" class="btn btn-lg btn-info" name="AddAdmin" style="width:50%;">Go To Dashboard</button>
                                </a>
                            </div>
        </div>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
