<?php $page_id = 3; ?>
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
                                    <h2>clients</h2>
                                    <p>We would be delighted to answer any inquiry you might have about your financial affairs. Please use the contact form below or call us at +41 41 588 05 02. We’re available from Monday to Friday, 09:00-17:00 CET to take your call.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div id="clientWrap" class="page hasShadow">
                                <ul>
                                    <li>
                                        <div class="slidertext">
                                            <h2>Portfolio Auditing</h2>
                                            <p>An audit helps you understand where you are. It helps us understand where you want to go. </p>  
                                            <p>For clients, for individuals and institutions - SIAM AG acts as a informer, guider and ultimately; a facilitator.</p>                                         
                                            <div class="btn-group">
                                                <div class="btn-transparent">
                                                    <a href="" class="d-flex" data-bs-toggle="modal" data-bs-target="#Portfolio">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Item end -->                                    
                                    <li>
                                        <div class="slidertext">
                                            <h2>Financial Instruments</h2>
                                            <p>Every instrument that our clients have access to, has passed a rigorous quantitative test. For the Swiss, return of capital far exceeds return on capital in importance. </p>                                            
                                            <div class="btn-group">
                                                <div class="btn-transparent">
                                                    <a href="" class="d-flex" data-bs-toggle="modal" data-bs-target="#Financial">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Item end -->                                    
                                    <li>
                                        <div class="slidertext">
                                            <h2>International Currencies.</h2>
                                            <p>There are many international currencies, but there is only one universal one - Trust. </p>                                            
                                            <div class="btn-group">
                                                <div class="btn-transparent">
                                                    <a href="" class="d-flex"data-bs-toggle="modal" data-bs-target="#International">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Item end -->                                   
                                    <li>
                                        <div class="slidertext">
                                            <h2>Gold Trading</h2>
                                            <p>All that glitters is not Gold. Except when its Swiss Gold.</p>                                            
                                            <div class="btn-group">
                                                <div class="btn-transparent">
                                                    <a href="" class="d-flex"data-bs-toggle="modal" data-bs-target="#Gold">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Item end -->             
                                    <li>
                                        <div class="slidertext">
                                            <h2> Instrument Monetizations</h2>
                                            <p>Over a 100 years of combined financial experience; enabling exceptional performance</p>                                            
                                            <div class="btn-group">
                                                <div class="btn-transparent">
                                                    <a href="" class="d-flex"data-bs-toggle="modal" data-bs-target="#Instrument">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Item end -->                                                
                                    <li>
                                        <div class="slidertext">
                                            <h2>Institutional Equity</h2>
                                            <p>Our global financial networks often allows us to play the role of facilitator, between investors and financiers. This allows our clients access to investment opportunities that are private, confid</p>                                            
                                            <div class="btn-group">
                                                <div class="btn-transparent">
                                                    <a href="" class="d-flex"data-bs-toggle="modal" data-bs-target="#Institutional">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Item end -->                          
                                    <li>
                                        <div class="slidertext">
                                            <h2>High Return Trade Platforms</h2>
                                            <p>For clients with an appetite for risk, SIAM allows admission to High-Frequency Trading and other associated products.</p>                                            
                                            <div class="btn-group">
                                                <div class="btn-transparent">
                                                    <a href="" class="d-flex"data-bs-toggle="modal" data-bs-target="#High">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Item end -->




                                    <div class="arrowWrap">
                                        <span id='prevItem'><img src="<?=$images?>up-arrow.png" class='img-fluid' alt='up' /></span>
                                        <span id='nextItem'><img src="<?=$images?>down-arrow.png" class='img-fluid' alt='up' /></span>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("assets/footer.php");  ?>
        </header>
    </main>     
    
    <?php include("assets/modals.php");  ?>
</body>
</html>