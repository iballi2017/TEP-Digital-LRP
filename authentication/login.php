<!-- Header -->
<?php include "../components/header.php"; ?>
<div id="login-page">
    <div class="page-wrapper school-bg pt-5 pb-3">
        <div class="inner container-fluid">
            <div class="title-image-wrapper">
                <img src="../assets/images/TEP-school-custom-title-image.png" alt="" class="img-fluid">
            </div>
            <div class="form-wrapper">
                <div class="form-card mb-4">
                    <div class="text-center">
                        <h5 class="text-uppercase title">Login</h5>
                    </div>
                    <form action="">
                        <div class="form-group">
                            <label for="EmailAddress" class="form-label text-uppercase">User Id / Email Address</label>
                            <input type="text" id="EmailAddress" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Password" class="form-label text-uppercase">Password</label>
                            <input type="password" id="Password" class="form-control">
                        </div>
                        <button class="btn primary-btn btn-block text-uppercase form-btn">Enter</button>
                    </form>
                </div>

                <div class="text-center text-bold text-white">
                    If you don’t have an account <a href="./register.php" class="text-link">SIGN UP</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include "../components/footer.php"; ?>