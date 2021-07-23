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
                <div class='card card-body  bg-light mt-2 mb-5'>
                    <h2>Register</h2>
                    <p>Please fill in credentials to Sign Up.</p>
                    <form action="" method='POST'>

                        <div class="form-group">
                            <label for='name'>Name: <sup>*</sup></label>
                            <input type='name' name="name" class='form-control form-control-lg'>
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label for='username'>Username: <sup>*</sup></label>
                            <input type='text' name="username" class='form-control form-control-lg'>
                            <span class="invalid-feedback"></span>
                        </div>


                        <div class="form-group">
                            <label for='email'>Email: <sup>*</sup></label>
                            <input type='email' name="email" class='form-control form-control-lg'>
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label for='password'>Password: <sup>*</sup></label>
                            <input type='password' name="password" class='form-control form-control-lg'>
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label for='confirm_password'>Confirm Password: <sup>*</sup></label>
                            <input type='password' name="confirm_password" class='form-control form-control-lg'>
                            <span class="invalid-feedback"></span>
                        </div>


                        <div class="row">

                            <div class='col'>

                                <input type='submit' name='register' value='Register' class='btn  btn-block color-set'>

                            </div>



                        </div>
                        <div class="row">
                            <div class='col'>

                                <a href="" class="btn  btn-block">Have account? Login</a>

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