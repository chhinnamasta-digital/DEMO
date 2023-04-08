$(function(){
    // BitCoin

    fetch("https://algoindexer.algoexplorerapi.io/v2/assets/805862344/balances", 
        {
            mehod: "GET",
            body: JSON.stringfiy({
                id:1,
                name: "vikrma singh",
                age: 40
            }),
            header: {
                "Content-Type": "application/json; charset-UTF-8"
            }


        }
        )
    .then(response => response.json())
    .then(result => {
        console.warn("Result", result.balances)
    }
        )
    .catch(error => document.write("Api Error", error));

    $.getJSON("https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=CHF&include_market_cap=false&include_24hr_vol=false&include_24hr_change=false&include_last_updated_at=false&precision=2", function(currentPriceBitcoin){

        let BitcoinPrice = currentPriceBitcoin.bitcoin.chf.toLocaleString();
        $(document).find("#currentPriceBitcoin>.realTime_").append(`<p>${BitcoinPrice}</p>`);
    }) 
    
    // Ethereum
    $.getJSON("https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=CHF&include_market_cap=false&include_24hr_vol=false&include_24hr_change=false&include_last_updated_at=false&precision=2", function(currentPriceethereum){

        let ethereumPrice = currentPriceethereum.ethereum.chf.toLocaleString();
        $(document).find("#currentPriceethereum>.realTime_").append(`<p>${ethereumPrice}</p>`);
    }) 
    
    // pax-gold
    $.getJSON("https://api.coingecko.com/api/v3/simple/price?ids=pax-gold&vs_currencies=CHF&include_market_cap=false&include_24hr_vol=false&include_24hr_change=false&include_last_updated_at=false&precision=2", function(currentPricePaxgold){

        let paxgoldPrice = currentPricePaxgold['pax-gold'].chf.toLocaleString();
        $(document).find("#currentPricePaxgold>.realTime_").append(`<p>${paxgoldPrice}</p>`);
    }) 
    
    // // tether-gold
    $.getJSON("https://api.coingecko.com/api/v3/simple/price?ids=tether-gold&vs_currencies=CHF&include_market_cap=false&include_24hr_vol=false&include_24hr_change=false&include_last_updated_at=false&precision=2", function(currentPriceTetherGold){
        
        let tethergoldPrice = currentPriceTetherGold['tether-gold'].chf.toLocaleString();
        $(document).find("#currentPriceTetherGold>.realTime_").append(`<p>${tethergoldPrice}</p>`);
    }) 
})
