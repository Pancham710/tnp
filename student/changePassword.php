<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Loginpage</title>
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <div>
                
                    <div class="card mt-4 border-top  border-primary">
                    
                        <div class="card-header text-center">
                            <h4> Change Password </h4>
                        </div>
                        <div class="card-body text-left">
                        <form method="POST" action="./studentLoginAPI.php">
                            <div class="mb-3">
                                <label for="uname" class="form-label">Old Password</label>
                                <input type="password" name="old_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" name="new_password" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            
                            <br>
                            
                            <div class="text-center">
                                <div class="m-2">
                                 
                                        <button type="submit" class="btn btn-lg btn-success" style="width:50%;">Save</button>
                       
                                </div>
                                
                            </div>

                            
                        </form>
                        </div>
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
</body>

</html>