<?php include("includes/header.php") ?>
<div class="reset_password loginPage">
    <div class="row">
        <div class="col-5">
            <div class="loginLeft_block container">
                <div class="loginDetail">
                    <div class="logo">
                        <?php include('includes/logo.php') ?>
                    </div>
                    <div class="sign-in-form">
                        <h4>Create New Password</h4>
                        <p>We'll ask for this password whenever you sign in.</p>

                        <form id="sign-in" method="post" action="#">
                            <div class="mb-3">
                              <label for="newPassword" class="form-label">New password</label>
                              <input type="password" class="form-control" id="newPassword">
                              <p class='mt-2'">Passwords must be at least 6 characters.</p>
                            </div>
                            <div class="mb-3">
                              <label for="confirm_password" class="form-label">Password again</label>
                              <input type="password" class="form-control" id="confirm_password" >
                            </div>
                            <button type="submit" id="signin-btn" class='button_style'>Save</button>
                            
                        </from>  

                        
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