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
                        <h4>Password Assitance</h4>
                        <p>Enter the email address or associated with your NovAu account.</p>

                        <form id="sign-in" method="post" action="#">
                            <div class="mb-3">
                              <label for="email" class="form-label">Email*</label>
                              <input type="email" class="form-control" id="email">
                            </div>
                            <button type="submit" id="signin-btn" class='button_style'>Continue</button>
                            
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