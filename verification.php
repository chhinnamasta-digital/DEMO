<?php include("includes/header.php") ?>
<div class="password_ass loginPage">
    <div class="row">
        <div class="col-5">
            <div class="loginLeft_block container">
                <div class="loginDetail">
                    <div class="logo">
                        <?php include('includes/logo.php') ?>
                    </div>
                    <div class="sign-in-form">
                        <h4>Verification required</h4>
                        <p>We've sent an OTP to the email <a href="/signup" class="text-white text-decoration-none"><strong>subrata26061997@gmail.com.</strong></a> Please enter it below to complete verification.</p>
                        <form id="sign-in" method="post" action="#">
                            <div class="mb-3">
                              <label for="OTP" class="form-label">Enter OTP</label>
                              <input type="text" class="form-control" id="OTP">
                            </div>
                            <button type="submit" id="signin-btn" class='button_style'>Continue</button>
                            <p class="from_p"><a href="/signup" class="text-white text-decoration-none">Resend OTP</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="loginRight_block container">
                <div class="loadingscreen">
                    <img src="images/setting.png" alt="Logo" />
                </div>
            </div>
        </div>
    </div>
    <div class="p-tb"></div>
</div>

<?php include('includes/footer.php') ?>