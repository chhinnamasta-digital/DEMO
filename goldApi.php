<?php
    'https://www.goldapi.io/api/XAU/CHF' \
    -H 'x-access-token: goldapi-2f0mi4srlea22in9-io'

    // set API Endpoint and API key 
    $endpoint = 'latest';
    $access_key = 'goldapi-2f0mi4srlea22in9-io';

    // Initialize CURL:
    $ch = curl_init('https://www.goldapi.io/api/XAU/CHF'.$endpoint.'?x-access-token='.$access_key.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Store the data:
    $json = curl_exec($ch);
    curl_close($ch);

    // Decode JSON response:
    $exchangeRates = json_decode($json, true);

    // Access the exchange rate values, e.g. GBP:
    echo json_encode($exchangeRates);

   
?>