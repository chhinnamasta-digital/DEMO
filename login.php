<?php 
    session_start();
    include("includes/header.php");
    
    if(isset($_SESSION['session_userId']) && ($_SESSION['session_userId'] != '')){
        header("Location: index.php");
        
    }
    
    ?>
<div class="loginPage">
    <div class="row">
        <div class="col-5">
            <div class="loginLeft_block container">
                <div class="loginDetail">
                    <div class="logo">
                       <?php include ('includes/logo.php') ?>
                    </div>
                    <div class="sign-in-form">
                        <div class="response_msg">
                            <div class="messageAlert">
                                <strong class='appendText'></strong>
                                <button type="button" class="messageClose"></button>
                            </div>
                        </div>
                        <h4>Sign In</h4>
                        <p>Enter your email and password to sign in!</p>
                        <form id="sign-in" method="post" action="#">
                            <div class="mb-3">
                              <label for="signInEmail" class="form-label">Email</label>
                              <input type="email" class="form-control" id="signInEmail" placeholder="name@example.com" name="signInEmail">
                              <div class="messages"></div>
                            </div>
                            <div class="mb-3">
                              <label for="signInPassword" class="form-label">password</label>
                              <input type="password" class="form-control" name="signInPassword" id="signInPassword" placeholder="Password" minlength='6' require> 
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Keep me SIgned In
                                </label>
                                <label class="form-check-label float-end" for="flexCheckDefault">
                                    <a href="" class="text-decoration-none text-white">Forgot Password?</a>
                                </label>
                            </div>
                            <button type="submit" id="signin-btn" class='button_style'>Sign in</button>
                            <p class="from_p">Not registered yet? <a href="signup.php" class="text-white text-decoration-none"><strong>Create an Account</strong></a></p>
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