function chartContextHum(ctx){
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
    labels: [],
    datasets: [{
        label: "Altitud (BME 208)",
        borderColor: "black",
        data: [],
        fill: true,
        pointStyle: 'triangle',
        backgroundColor: '#ff5733',
        pointRadius: 5,
        pointHoverRadius: 5,
        lineTension: 0.4        
    }]
    },
    // Configuration options go here
        options: {
              responsive: true,
              scales: {
                  yAxes: [{                                  
                       ticks: {
                          
                           stepSize:7.2,
                      }

                  }]
              }
        }    
    });
    return  chart;
}
