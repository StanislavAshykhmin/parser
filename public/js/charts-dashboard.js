$('#tag-button').click(function () {
    var tag = $("#tag option:selected").val();
    var tag_name = $("#tag option:selected").text();
    var from = $(".from").val();
    var before = $(".before").val();
    if (from == "" && before != ""){
        alert('Enter from!');
    }
    var url = '/dashboard/graphic/' + tag + '/' + from + '/' + before
    $.ajax({
        url: url,
        success: function (result) {
            if (Math.max.apply(Math, result.count) < 100) {
                var step = 5;
            }else if(Math.max.apply(Math, result.count) < 300 ){
                var step = 20;
            }else {
                var step = 50;
            }
            if (result.countDay < 2) {
                alert('Not enough data to plot');
            }
            if (result.countDay > 1) {
                $('#chartjs-dashboard-line').remove();
                $('.card-body').html('<div class="chart chart-lg mt-2">\n' +
                    '\t\t\t\t\t\t\t\t\t\t<canvas id="chartjs-dashboard-line"></canvas>\n' +
                    '\t\t\t\t\t\t\t\t\t</div>');
                new Chart(document.getElementById("chartjs-dashboard-line"), {
                    type: 'line',
                    data: {
                        labels: result.day,
                        datasets: [{
                            label: tag_name,
                            fill: true,
                            backgroundColor: "rgba(65, 212, 146, 0.15)",
                            borderColor: "#41D492",
                            data: result.count
                        }]
                    },

                    options: {
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },
                        tooltips: {
                            intersect: false
                        },
                        hover: {
                            intersect: true
                        },
                        plugins: {
                            filler: {
                                propagate: false
                            }
                        },
                        elements: {
                            line: {
                                tension: 0
                            }
                        },
                        scales: {
                            xAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Days'
                                },
                                reverse: true,
                                gridLines: {
                                    color: "rgba(0,0,0,0.0)"
                                }
                            }],
                            yAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Numbers of records'
                                },
                                ticks: {
                                    stepSize: step
                                },
                                display: true,
                                borderDash: [5, 5],
                                gridLines: {
                                    color: "rgba(0,0,0,0)",
                                    fontColor: "#fff"
                                }
                            }]
                        }
                    }
                });
            }
        }
    })
});
