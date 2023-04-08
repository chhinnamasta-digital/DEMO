// //  bitcoin API
 var getCryptoCoin = $.getJSON("https://api.coingecko.com/api/v3/coins/bitcoin/market_chart?vs_currency=CHF&days=1000&interval=weekly", function(data){
  let bitcoinArrayData = [];
  let bitcoinArrayLavel = [];

 // console.log("Main Api Data", data.prices);
 

 for(let i = 0; i < data.prices.length; i++){
    const dates = new Date(data.prices[i][0]);

      bitcoinArrayLavel.push(dates.toLocaleDateString('en-US'));
      bitcoinArrayData.push(data.prices[i][1]);
 }
 // console.log("bitcoinArrayLavel", bitcoinArrayLavel);
 // console.log("bitcoinArrayData", bitcoinArrayData);

 const ctx = document.getElementById('bitcoin');

 new Chart(ctx, {
    type: 'line',
    data: {
      labels: bitcoinArrayLavel,
      datasets: [
        {
        label: 'Bitcoin',
        data: bitcoinArrayData,
        borderWidth: 1,
        borderColor: '#FFBB31',
        pointBackgroundColor: 'red',
        pointRadius: 0,
        fill: true,
        showLine: true ,
        tension: 0.5
      }
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
 })

  // ethereum API
 var getEthereumCryptoCoin = $.getJSON("https://api.coingecko.com/api/v3/coins/ethereum/market_chart?vs_currency=CHF&days=1000&interval=weekly", function(data){
  let ethereumArrayData = [];
  let ethereumArrayLavel = [];

 // console.log("Main Api Data", data.prices);
 

 for(let i = 0; i < data.prices.length; i++){
    const dates = new Date(data.prices[i][0]);

      ethereumArrayLavel.push(dates.toLocaleDateString('en-US'));
      ethereumArrayData.push(data.prices[i][1]);
 }
 // console.log("ethereumArrayLavel", ethereumArrayLavel);
 // console.log("ethereumArrayData", ethereumArrayData);

 const ctx = document.getElementById('ethereum');

 new Chart(ctx, {
    type: 'line',
    data: {
      labels: ethereumArrayLavel,
      datasets: [{
        label: 'ethereum',
        data: ethereumArrayData,
        borderWidth: 1,
        borderColor: '#37367b',
        pointBackgroundColor: 'red',
        pointRadius: 0,
        fill: true,
        showLine: true ,
        tension: 0.5
      }]
    },
    options: {
      scales: {        
        y: {
          beginAtZero: true
        }
      }
    }
  });
 })

  // pax-gold API
  var getPaxgoldCryptoCoin = $.getJSON("https://api.coingecko.com/api/v3/coins/pax-gold/market_chart?vs_currency=CHF&days=1000&interval=weekly", function(data){
    let PaxgoldArrayData = [];
    let PaxgoldArrayLavel = [];
  
   // console.log("Main Api Data", data.prices);
   
  
   for(let i = 0; i < data.prices.length; i++){
      const dates = new Date(data.prices[i][0]);
  
        PaxgoldArrayLavel.push(dates.toLocaleDateString('en-US'));
        PaxgoldArrayData.push(data.prices[i][1]);
   }
   // console.log("PaxgoldArrayLavel", PaxgoldArrayLavel);
   // console.log("PaxgoldArrayData", PaxgoldArrayData);
  
   const ctx = document.getElementById('Paxgold');
  
   new Chart(ctx, {
      type: 'line',
      data: {
        labels: PaxgoldArrayLavel,
        datasets: [{
          label: 'Paxgold',
          data: PaxgoldArrayData,
          borderWidth: 1,
          borderColor: '#6AB558',
          pointBackgroundColor: 'red',
          pointRadius: 0,
          fill: true,
          showLine: true ,
          tension: 0.5
        }]
      },
      options: {
        scales: {        
          y: {            
            suggestedMin: 1400,
            suggestedMax: 2200
          }
        }
      }
    });
   })

   
  // pax-gold API
  var getTetherGoldCryptoCoin = $.getJSON("https://api.coingecko.com/api/v3/coins/tether-gold/market_chart?vs_currency=CHF&days=1000&interval=weekly", function(data){
    let TetherGoldArrayData = [];
    let TetherGoldArrayLavel = [];
  
   // console.log("Main Api Data", data.prices);
   
  
   for(let i = 0; i < data.prices.length; i++){
      const dates = new Date(data.prices[i][0]);
  
        TetherGoldArrayLavel.push(dates.toLocaleDateString('en-US'));
        TetherGoldArrayData.push(data.prices[i][1]);
   }
   // console.log("TetherGoldArrayLavel", TetherGoldArrayLavel);
   // console.log("TetherGoldArrayData", TetherGoldArrayData);
  
   const ctx = document.getElementById('TetherGold');
  
   new Chart(ctx, {
      type: 'line',
      data: {
        labels: TetherGoldArrayLavel,
        datasets: [{
          label: 'TetherGold',
          data: TetherGoldArrayData,
          borderWidth: 1,
          borderColor: '#3F928E',
          pointBackgroundColor: 'red',
          pointRadius: 0,
          fill: true,
          showLine: true ,
          tension: 0.5
        }]
      },
      options: {
        scales: {        
          y: {
            suggestedMin: 1400,
            suggestedMax: 2200
            
          }
        }
      }
    });
   })