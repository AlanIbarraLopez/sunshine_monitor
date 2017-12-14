var num  = 0;
function build() {


    $.ajax({
        method: "GET",
        url: "get",
    })
        .done(function( msg ) {

            //console.log(msg);
            if (num == 0){
                num = msg.length;
                graficar(msg);
            }

            if (msg.length != num){
                num = msg.length;
                graficar(msg);
            }



        }).fail(function (msge) {

            //console.log(msge);
    });


}

function graficar(msg) {
    let labels = [];
    let datos  = [];
    msg.forEach(function (t) {
        labels.push(t.date_registro);
        datos.push(t.temp);
    });

    //console.log(labels);
    //console.log(datos);
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Temperaturas',
                data: datos,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
}