<?php 
require_once ('includes/header.php');
?>
<!-- Login code borrowed from here - will be adding on to it - just wanted a placeholder https://phppot.com/php/bootstrap-login-form-template/ -->
<div
    class="d-flex flex-column min-vh-100 justify-content-center align-items-center"
    id="template-bg-3">
    <div class="card mb-5 p-5  bg-dark bg-gradient text-white col-md-4">
        <div class="card-header text-center">
            <h3>Login</h3>
        </div>
        <div class="card-body mt-3">
            <form name="login" action="" method="post">
                <div class="input-group form-group mt-3">
                    <input type="text"
                        class="form-control text-center p-3"
                        placeholder="Username" name="username">
                </div>
                <div class="input-group form-group mt-3">
                    <input type="password"
                        class="form-control text-center p-3"
                        placeholder="Password" name="password">
                </div>
                <div class="text-center">
                    <input type="submit" value="Login"
                        class="btn btn-primary mt-3 w-100 p-2"
                        name="login-btn">
                </div>
            </form>
                <?php if(!empty($loginResult)){?>
                <div class="text-danger"><?php echo $loginResult;?></div>
                <?php }?>
            </div>
        <div class="card-footer p-3">
            <div class="d-flex justify-content-center">
                <!-- TODO have sign up page get hyperlinked -->
                <div class="text-primary">Don't have an account? Make one here!</div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>