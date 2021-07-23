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

        <div class="row">

            <div class="col-md-6 mx-auto">
                <div class='card card-body  bg-light mt-5'>

                    <h2>Update Your account Details</h2>
                    <p>


                    </p>
                    <form action="" method='POST'>
                        <div class="form-group">
                            <label for='name'>Name: <sup>*</sup></label>
                            <input type='text' name="name" class='form-control form-control-lg'>
                            <span class="invalid-feedback"></span>
                        </div>




                        <div class="form-group">
                            <label for='username'>Image: <sup>*</sup></label>
                            <input type='file' name="image" class='form-control'>
                            <span class="invalid-feedback"></span>
                        </div>


                        <div class="row">

                            <div class='col'>

                                <input type='submit' name='edit' value='Update Now' class='btn color-set btn-block'>

                            </div>


                            <div class='col'>

                                <a href="" class="btn btn-light btn-block">Wanna Change Password? </a>

                            </div>

                        </div>

                    </form>

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