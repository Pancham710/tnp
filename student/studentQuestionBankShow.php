<?php
session_start();

require('../connection.php');

 

if(!isset($_SESSION["admin_email"])){
    header('location: ./studentLogin.php?error=Please login before accessing the page.');
    exit;
}

$sql = "SELECT Questions FROM questionbank WHERE ID = '" . $_GET["id"] . "'";
$result = $conn->query($sql);

$questions = $result->fetch_assoc()["Questions"];
// Code To Get Username End
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Admin | Add Placed Student Details </title>
</head>

<body>
    <form method="post" action="./adminAddQuestionAPI.php">

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
                                <h4>Add Questions</h4>
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="companyid" value="<?php echo $_GET["id"]; ?>" />
                                <div class="mb-3">
                                    <label for="placedcompanyid" class="form-label"> Questions Asked </label>
                                    <textarea name="questions" class="form-control" rows="10" cols="50" placeholder="Write Questions Here" disabled><?php echo $questions; ?></textarea>
                                </div>

                                <?php
                                if (isset($_GET["error"])) {
                                    echo "<center style='color:red;font-size:18px;border:1px solid red;padding:3px;margin:5px;'>" . $_GET["error"] . "</center>";
                                }
                                ?>
 
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