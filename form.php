<!-- Header Start -->
<?php include ("includes/header.php"); ?>
<!-- Header End -->

<body class="layout-boxed" data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100">

    <!-- BEGIN LOADER -->
    <?php include ("includes/loader.php"); ?>
    <!-- END LOADER -->

    <!-- BEGIN NAVBAR -->
    <?php include ("includes/navbar.php"); ?>
    <!-- END NAVBAR -->

    <!-- BEGIN MAIN CONTAINER -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="tc-overlay"></div>
        <div class="psidebar-overlay"></div>

        <!-- BEGIN SIDEBAR -->
        <?php include("includes/sidebar.php"); ?>
        <!-- END SIDEBAR -->

        <div id="content" class="main-content">

            <!-- Main Content Area -->
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="card">
                            
                            <div class="card-header">
                                <h4 class="card-title mb-0">User Registration Form</h4>
                            </div>

                            <div class="card-body">

                                <form class="simple-example" action="javascript:void(0);" novalidate>

                                    <div class="row">

                                        <!-- Full Name -->
                                        <div class="col-md-6 mb-4">
                                            <label for="fullName" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="fullName" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter full name.
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6 mb-4">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="email" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter email.
                                            </div>
                                        </div>

                                        <!-- Mobile Number -->
                                        <div class="col-md-6 mb-4">
                                            <label for="mobile" class="form-label">Mobile Number</label>
                                            <input type="tel" class="form-control" id="mobile" required>
                                            <div class="invalid-feedback">
                                                Please enter mobile number.
                                            </div>
                                        </div>

                                        <!-- Date of Birth -->
                                        <div class="col-md-6 mb-4">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob" required>
                                            <div class="invalid-feedback">
                                                Please select date of birth.
                                            </div>
                                        </div>

                                        <!-- Gender -->
                                        <div class="col-md-6 mb-4">
                                            <label for="gender" class="form-label">Gender</label>
                                            <select class="form-control" id="gender" required>
                                                <option value="">Select Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select gender.
                                            </div>
                                        </div>

                                        <!-- Password -->
                                        <div class="col-md-6 mb-4">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" required>
                                            <div class="invalid-feedback">
                                                Please enter password.
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="col-md-12 mb-4">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea class="form-control" id="address" rows="4" required></textarea>
                                            <div class="invalid-feedback">
                                                Please enter address.
                                            </div>
                                        </div>

                                    </div>

                                    <button class="btn btn-primary mt-3" type="submit">
                                        Submit Form
                                    </button>

                                    <button type="reset" class="btn btn-secondary mt-3 ms-2">
                                        Reset
                                    </button>

                                </form>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- End Main Content Area -->

            <!-- BEGIN FOOTER -->
            <?php include ("includes/footer.php"); ?>
            <!-- END FOOTER -->

        </div>
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN PROFILE SIDEBAR -->
    <?php include ("includes/right_side_profile.php"); ?>
    <!-- END PROFILE SIDEBAR -->

    <!-- BEGIN SEARCH MODAL -->
    <?php include ("includes/search_modal.php"); ?>
    <!-- END SEARCH MODAL -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <?php include ("includes/homescripts.php"); ?>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

</body>
</html>