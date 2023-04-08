<?php include("includes/header.php") ?>
<div class="register loginPage">
    <div class="row">
        <div class="col-5">
            <div class="register loginLeft_block container">
                <div class="register loginDetail">
                    <div class="logo">
                       <?php include ('includes/logo.php') ?>
                    </div>
                    <div class="sign-up-form">                        
                        <div class="response_msg">
                            <div class="messageAlert">
                                <strong class='appendText'></strong>
                                <button type="button" class="messageClose"></button>
                            </div>
                        </div>
                        <h4>Sign Up</h4>
                        <form id="sign-up" method="post">
                            <div class="mb-3">
                              <label for="signupName" class="form-label">name</label>
                              <input type="text" class="form-control" id="signupName" placeholder="Name" name="name" autocomplete='off' />
                              <div class="messages"></div>
                            </div>
                            <div class="mb-3">
                              <label for="signupAddress" class="form-label">Wallet Address</label>
                              <textarea class="form-control" id="signupWalletAddress" placeholder="Wallet Address" name="wallet" autocomplete='off' ></textarea>
                              <div class="messages"></div>
                            </div>
                            <div class="mb-3">
                              <label for="sigiupEmail" class="form-label">Email</label>
                              <input type="email" class="form-control" id="sigiupEmail" placeholder="name@example.com" name="email" autocomplete='off' />
                              <div class="messages"></div>
                            </div>
                            <div class="mb-3">
                              <label for="signupPassword" class="form-label">password <span class="seePass"><i class="fas fa-eye"></i></span></label>
                              <input type="password" class="form-control" id="signupPassword" placeholder="Password" name="passwd" autocomplete='off' />
                              <div class="messages"></div>
                            </div>
                            <div class="mb-3">
                              <label for="signupconfirmpassword" class="form-label">Confirm Password <span class="seePass"><i class="fas fa-eye"></i></span></label>
                              <input type="password" class="form-control" id="signupConfirmpassword" placeholder="Confirm Password" autocomplete='off' />
                              <div class="messages"></div>
                            </div>
                            <button type="submit" id="signUp-btn" class='button_style' >
                                Sign up
                            </button>
                            <p class="from_p">Have an Acoount ALready? <a href="login.php" class="text-white text-decoration-none"><strong> Sign in</strong></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="register loginRight_block container">
                <div class="loadingscreen">
                    <img src="images/setting.png" alt="Logo" />
                </div>
            </div>
        </div>
    </div>
    <div class="p-tb"></div>
</div>
<div class="spinner_modal d-none">
    <div class="spinner_-content">
        <div class="spinner_-body">
            <span class="text-white spinner-border spinner-border-sm me-4" role="status" aria-hidden="true"></span>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>