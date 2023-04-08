<?php
    $userBalanceUrl = file_get_contents("https://algoindexer.algoexplorerapi.io/v2/assets/805862344/balances");
    $jsonDataDecode = json_decode($userBalanceUrl, true);
    
    // print_r($jsonDataDecode['balances']);
    
    $uID = $_SESSION['session_userId'];
    $select_balance =  "SELECT * FROM novau_login WHERE id='$uID'";
    $balance_query = mysqli_query($dbConn, $select_balance);
    // var_dump($balance_query);
    $fetch_arry = mysqli_fetch_array($balance_query);

    $userId = $fetch_arry['id'];
    $user_name = $fetch_arry['user_name'];
    $wallet_address = $fetch_arry['wallet_address'];
    
    // $json_str = file_get_contents('php://input');
    // $json_obj = json_decode($json_str);
    // var_dump($json_obj->nombresgranada);
    // echo print_r($json_obj); echo '</pre>';
    
?>
<div class="col-4">
    <div class="realTime_">
        <div class="icon_block">
            <object data="images/icons/table.svg" width="25" height="25"> </object>
        </div>
        <div class="values_block">
            <label>Total NovAu Balance</label>
            <?php
                foreach($jsonDataDecode['balances'] as $key => $value){
                    
                    if($wallet_address == $value['address']){
                        echo"<p id='novAuBal'>".$value['amount']."</p>";
                    }
                }
            ?>
            
        </div>
    </div>
</div>

<div class="col-4">
    <div class="realTime_">
        <div class="icon_block">
            <object data="images/icons/f.svg" width="25" height="25"> </object>
        </div>
        <div class="values_block">
            <label>Gold Price/Gram</label>
            <p id="goldPrice"> </p>
            <!-- <input type="hidden" name="currency" id="currency" class="granadainput" />
            <input type="hidden" name="exchange" id="exchange" class="granadainput" />
            <input type="hidden" name="metal" id="metal" class="granadainput" />
            <input type="hidden" name="price_gram_18k" id="price_gram_18k" class="granadainput" />
            <input type="hidden" name="price_gram_20k" id="price_gram_20k" class="granadainput" />
            <input type="hidden" name="price_gram_21k" id="price_gram_21k" class="granadainput" />
            <input type="hidden" name="price_gram_22k" id="price_gram_22k" class="granadainput" />
            <input type="hidden" name="price_gram_24k" id="price_gram_24k" class="granadainput" /> -->
            <label>CHF</label>
        </div>
    </div>
</div>
<div class="col-4">
    <div class="realTime_">
        <div class="values_block ms-0">
            <label>Total Portfolio Value</label>
            <p id="portFolioValue"></p>
            <label> CHF</label>
        </div>

    </div>
</div>
<!--<div class="col-3">-->
<!--    <div class="search_">-->
<!--        <div class="search_block">-->
<!--            <object data="images/icons/search.svg" width="" height=""> </object>-->
<!--            <input type="search" id="search" placeholder="Search"/> -->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->