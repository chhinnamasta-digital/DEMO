<?php include("includes/header.php") ?>
<div class="success loginPage">
    <div class="row">
        <div class="col-5">
            <div class="loginLeft_block container">
                <div class="loginDetail">
                    <div class="logo passwordsuccess_logo">
                        <?php include('includes/logo.php') ?>
                    </div>
                    <div class="sign-in-form">
                        <div class="success_check">
                            <object data="images/icons/CheckCircleFilled.svg" width="200" height="200"> </object>
                        </div>

                        <h4 class="passwordsuccess_h4">Password Saved Sucessfully</h4>
                        
                        <button type="submit" id="signin-btn" class='button_style'>login
                            <span class="arrow"><object data="images/icons/Arrow.svg"> </object></span>
                        </button>
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