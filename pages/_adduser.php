<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="signup_db.php" method="post">
                                <?php if (isset($_SESSION['error'])) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                        ?>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_SESSION['success'])) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success']);
                                        ?>
                                    </div>

                                <?php } ?>
                                <?php if (isset($_SESSION['warning'])) { ?>
                                    <div class="alert alert-warning" role="alert">
                                        <?php
                                        echo $_SESSION['warning'];
                                        unset($_SESSION['warning']);
                                        ?>
                                    </div>

                                <?php } ?>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <!-- <label for="firstname" class="form-label">First name</label> -->
                                        <input type="text" class="form-control form-control-user" name="firstname" aria-describedby="firstname" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- <label for="lastname" class="form-label">Last name</label> -->
                                        <input type="text" class="form-control form-control-user" name="lastname" aria-describedby="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="email" class="form-label">Email</label> -->
                                    <input type="email" class="form-control form-control-user" name="email" aria-describedby="email" placeholder="Email Address">
                                </div>
                                <div class="form-group row">

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <!-- <label for="password" class="form-label">Password</label> -->
                                        <input type="password" class="form-control form-control-user" name="password" aria-describedby="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- <label for="confirm password" class="form-label">Confirm Password</label> -->
                                        <input type="password" class="form-control form-control-user" name="c_password" aria-describedby="c_password" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" name="singup" class="btn btn-dark btn-user btn-block">
                                    Register
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>