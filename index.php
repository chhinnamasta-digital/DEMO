<?php 
    session_start();
    include("dbFunction/dbConnection.php");
    include("includes/header.php");
    if(!isset($_SESSION['session_userId']) &&  ($_SESSION['session_userId'] == '')){
        header("Location: login.php");
    }
?>
    <script>
        var myHeaders = new Headers();
            myHeaders.append("x-access-token", "goldapi-2f0mi4srlea22in9-io");
            myHeaders.append("Content-Type", "application/json");
            var requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
            };

            fetch("https://www.goldapi.io/api/XAU/CHF", requestOptions)
            .then(response => response.json())
            .then(result => {            
                // console.log("jason_gold", result);
                $("#currency").val(result.currency);
                $("#exchange").val(result.exchange);
                $("#metal").val(result.metal);
                $("#price_gram_18k").val(result.price_gram_18k);
                $("#price_gram_20k").val(result.price_gram_20k);
                $("#price_gram_21k").val(result.price_gram_21k);
                $("#price_gram_22k").val(result.price_gram_22k);
                $("#price_gram_24k").val(result.price_gram_24k);
                $(document).find("#goldPrice").text(result.price_gram_24k.toLocaleString());

                let getNovBal = $(document).find("#novAuBal").text(); // 1999999
                let current_goldPrice = result.price_gram_24k; // gold price in g 54.00

                let oneNovAu = 0.1; // 0.1

                let totalNovAuAmout = parseFloat(current_goldPrice) / 10 * getNovBal;
                
                
                $(document).find("#portFolioValue").text(totalNovAuAmout.toLocaleString());

            })
            .catch(error => console.log('error', error));
    </script>
</head>
<body>
<div class="content">
    <div class="dashboard_wrapper">
        <div class="row">
            <div class="col-3">
                <div class="dashboard_navbar_section">
                    <?php include('includes/left-navbar.php') ?> 
                                
                </div>
            </div>
            <div class="col-9">
                <div class="dashboard_content_section">
                    <header class="row"> 
                        <?php include('includes/header-top-bar.php') ?>  
                        <div class="col-12">
                            <div class="dashboard_chart_section">
                                <?php include('includes/dashboard.php') ?>
                            </div>                                               
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>

