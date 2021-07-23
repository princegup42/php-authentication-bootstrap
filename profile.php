<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login &amp; Register</title>

    <!--Bootstrap cdn-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Font awesome cdn-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">

    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark mb-3 navbar-custom">

        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.html">Home </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Logout</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="">Register </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>

    <div class="container">

        <div class='jumbotron jumbotron-fluid text-center color-set'>
            <div class="container">
                <h1 class='display-3'>
                    Profile Managment
                </h1>
                <p class='lead'>
                    Here you will be able to upload image and edit information
                </p>

            </div>
        </div>

        <div class="col-md-6 mx-auto">

            <div class='card'>


                <div class="card-header color-set">

                    Your Profile Data
                </div>
                <div class='card-body '>


                    <div class="row">

                        <div class="col-md-8">
                            <div class='detail-text'>
                                <label for="name"><strong>Name:</strong></label>
                                <span class='text-data'> Shan Shah</span>
                            </div>

                            <div class='detail-text'>
                                <label for="name"><strong>Email:</strong></label>
                                <span class='text-data'> demo@shanshah.com</span>
                            </div>

                            <div class='detail-text'>
                                <label for="name"><strong>Account Status:</strong></label>
                                <span class='text-data'> Verified</span>
                            </div>

                            <hr />
                            <div class='detail-text'>
                                <label for="name"><strong>Created at:</strong></label>
                                <span class='text-data'>13-07-2018</span>
                            </div>

                        </div>
                        <div class="col-md-4">

                            <a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a>

                        </div>
                    </div>

                </div>
                <div class='card-footer'>
                    <a href='' data-toggle="modal" data-target="#myModal"><i class='fa fa-trash-o'></i></a>
                    <a href="" class='pull-right'><i class='fa fa-pencil-square-o'></i></a>
                </div>

            </div>
        </div>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            style='cursor:pointer;'>&times;</button>

                    </div>
                    <div class="modal-body text-center">
                        <p>Do you really want to delete your account?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="" class="btn btn-danger">Yes</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal"
                            style='cursor:pointer;'>No</button>
                    </div>
                </div>

            </div>
        </div>



    </div>



    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--CUSTOM JS-->
    <script src="assets/js/script.js"></script>

</body>

</html>