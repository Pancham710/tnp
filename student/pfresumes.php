<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Admin | PF Resumes Upload </title>
</head>

<body>
    <div class="container">


    <div class="row">
            <div class="col-2">

            </div>
    </div>

    <form action="pfresumesAPI.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <div>
                    <div class="card mt-4 border-top  border-primary">
                        <div class="card-header text-center">
                            <h4>PF Resumes Upload</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="pfid" class="form-label"> Upload Profile Picture: </label>
                                <input type="file" class="form-control" name="pfid">
                            </div>

                            <div class="mb-3">
                                <label for="resumeid" class="form-label"> Upload Resume: </label>
                                <input type="file" class="form-control" name="resumeid">
                            </div>
                           
                        </div>

                        <div class="card-body text-center">
                            <div class="m-2">
                                <!-- <a href="./pfresumesAPI.php"> -->
                                    <button type="submit" class="btn btn-lg btn-info" name="Submit" value="Submit" style="width:50%;"> Submit </button>
                                <!-- </a> -->
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
