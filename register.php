<?php require_once 'includes/header.php'; ?>

<?php require_once 'includes/navbar.php'; ?>

<div class="container">


    <div class="row">

        <div class="col-md-6 mx-auto">
            <div class='card card-body  bg-light mt-2 mb-5'>
                <h2>Register</h2>
                <p>Please fill in credentials to Sign Up.</p>
                <form action="<?php echo (URLROOT); ?>/process/p_register.php" method='POST'>

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

<?php require_once 'includes/footer.php'; ?>