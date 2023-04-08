const ctx = document.getElementById('polarChart').getContext('2d');
const polarChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['ALGORAND', 'BTC', 'ETH', 'NOVAU', 'PAXG', 'XAUT'],
        datasets: [{
            label: '# of Votes',
            data: [2456639744, 426442981376, 179866435584, 1800000, 574043648, 426298016],   
            backgroundColor:['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange']
        }]
    }, 
    options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: 'Chart.js Polar Area Chart'
          }
        }
      },  
});

var _logo_Rand = [], _B_T_C = [], _E_T_H = [], _gold = [], _nov_Au = [], _PA_XG = [], _month_date = [];

async function dummyData(){
    await dummyDataApi();

    console.log(_month_date);

    let ctx = document.getElementById('myChart').getContext('2d');
    let myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [1,2,3,4,5, 6],
            datasets: [
                {
                    label: 'Alogorand',
                    data: _logo_Rand,
                    backgroundColor: [
                        'blue'
                    ],
                    borderColor: [
                        'blue'
                    ],
                    borderWidth: 4
                },
                
                {
                    label: 'BTC',
                    data: _B_T_C,
                    backgroundColor: [
                        '#fff'
                    ],
                    borderColor: [
                        '#fff'
                    ],
                    borderWidth: 4
                },
                
                {
                    label: 'ETH',
                    data: _E_T_H,
                    backgroundColor: [
                        '#009393'
                    ],
                    borderColor: [
                        '#009393'
                    ],
                    borderWidth: 4
                },
                
                {
                    label: 'Gold',
                    data: _gold,
                    backgroundColor: [
                        '#FF3131'
                    ],
                    borderColor: [
                        '#FF3131'
                    ],
                    borderWidth: 4
                },
                
                {
                    label: 'NovAu',
                    data: _nov_Au,
                    backgroundColor: [
                        '#FFBB31'
                    ],
                    borderColor: [
                        '#FFBB31'
                    ],
                    borderWidth: 4
                },
                
                {
                    label: 'PAXG',
                    data: _PA_XG,
                    backgroundColor: [
                        'white'
                    ],
                    borderColor: [
                        'white'
                    ],
                    borderWidth: 4
                }
            ]
        },
        options: {
            elements: {
                line:{
                    tension: 0.3,
                }
            },
            scales: {
                x: {
                    ticks:{
                        color: '#fff'
                    }
                },
                y: {
                    ticks:{
                        color: '#fff',
                        
                    },
                    // beginAtZero: true
                    // min: 0,
                    // max : 7000,
                    // setpSize : 10
                }
            }
        }
    });
}
dummyData();

async function dummyDataApi()
{
    const apiURL ="http://127.0.0.1:8000/month_wise";

    const response = await fetch(apiURL);
    const lineChart = await response.json();

    console.log(lineChart.data.APR);

    const logoRand = lineChart.data.map( (x) => x.ALGORAND);
    const BTC = lineChart.data.map( (x) => x.BTC);
    const ETH = lineChart.data.map( (x) => x.ETH);
    const gold = lineChart.data.map( (x) => x.GOLD);
    const novAu = lineChart.data.map( (x) => x.NOVAU);
    const PAXG = lineChart.data.map( (x) => x.PAXG);
    const dat_wise = lineChart.data.map( (x) => x.date);

   

    _logo_Rand = logoRand;    
    _B_T_C = BTC;
    _E_T_H = ETH;
    _gold = gold;    
    _nov_Au = novAu;    
    _PA_XG = PAXG;    
    _month_date = dat_wise;    
}
