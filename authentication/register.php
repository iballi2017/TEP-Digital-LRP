<!-- Header -->
<?php include "../components/header.php"; ?>

<div id="register-page">
    <div class="page-wrapper school-bg pt-5 pb-3">
        <div class="inner container-fluid">
            <div class="title-image-wrapper">
                <img src="../assets/images/TEP-school-custom-title-image.png" alt="" class="img-fluid">
            </div>
            <div class="form-wrapper">
                <div class="form-card mb-4">
                    <div class="text-center">
                        <h5 class="text-uppercase title">Sign Up</h5>
                    </div>
                    <form action="">
                        <div class="form-group">
                            <label for="FullName" class="form-label text-uppercase">Full Name</label>
                            <input type="text" id="FullName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="EmailAddress" class="form-label text-uppercase">Email Address</label>
                            <input type="text" id="EmailAddress" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Party" class="form-label text-uppercase">Select Party</label>
                            <div class="d-flex flex-wrap">
                                <div class="custom-check mr-4">
                                    <input type="radio" name="Party" id="Operator" name="Operator">
                                    <label for="Operator" class="check-label">
                                        <span class="ui-radio"></span>
                                        Operator
                                    </label>
                                </div>

                                <div class="custom-check">
                                    <input type="radio" name="Party" id="ParentGuardian" name="ParentGuardian">
                                    <label for="ParentGuardian" class="check-label">
                                        <span class="ui-radio"></span>
                                        Parent/Guardian
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Gender" class="form-label text-uppercase">Gender</label>
                            <div class="select-drop-wrapper">
                                <select name="Gender" id="Gender" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="femail">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Password" class="form-label text-uppercase">Password</label>
                            <!-- <div class="password-text-toggle-wrapper"> -->
                            <!-- <input type="password" id="Password" class="form-control"> -->
                            <div class="input-group mb-3">
                                <input type="password" id="Password" class="form-control">
                                <div class="input-group-append">
                                    <button class="btn" type="button" id="inputTypeToggler"></button>
                                </div>
                            </div>

                            <!-- </div> -->
                        </div>
                        <button class="btn primary-btn btn-block text-uppercase form-btn">Enter</button>
                    </form>
                </div>

                <div class="text-center text-bold text-white">
                    Already have an account <a href="./login.php" class="text-link">LOGIN</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include "../components/footer.php"; ?>