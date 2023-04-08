<?php $page_id = 1; ?>
<?php include("assets/header.php"); ?>
</head>
<body>
    <main>
        <header class="headerSection">
            <?php include("assets/navbar.php");  ?>
            <div class="bannerTextWrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="bannerTextWrap">
                                <div class="typography">
                                    <h2>Sophisticated is the New Swiss.</h2>
                                    <p>We’re a boutique asset management firm, headquartered in Switzerland. Delivering exceptional value through international opportunities, all while following Swiss principles.</p>
                                </div>
                                <div class="btn-group">
                                    <div class="comm_btn">
                                        <a href="<?=$root?>reach-us.php" class="d-flex">Reach Us</a>
                                    </div>
                                    <div class="btn-transparent ms-4">
                                        <a href="<?=$root?>clients.php" class="d-flex">Clients</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="bannerVideoWrap">
                                <div class="imgBanner">
                                    <video autoplay muted loop id="myVideo">
                                        <source src="<?=$images?>video/animate.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("assets/footer.php");  ?>
        </header>
    </main>     
    
</body>
</html>