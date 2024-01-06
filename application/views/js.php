    <!-- jquery
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/bootstrap.min.js"></script>
    <!-- wow JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/wow.min.js"></script>
    <!-- price-slider JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/counterup/jquery.counterup.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/counterup/waypoints.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/sparkline/jquery.sparkline.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/flot/jquery.flot.js"></script>
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/flot/jquery.flot.resize.js"></script>
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/flot/curvedLines.js"></script>
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/flot/flot-active.js"></script>
    <!-- knob JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/knob/jquery.knob.js"></script>
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/knob/jquery.appear.js"></script>
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/knob/knob-active.js"></script>
    <!--  wave JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/wave/waves.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/wave/wave-active.js"></script>
    <!--  todo JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
        <script src="<?php echo base_url(); ?>assets/green-horizotal/js/chat/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/green-horizotal/js/chat/jquery.chat.js"></script>
        <!-- datapicker JS
            ============================================ -->
            <script src="<?php echo base_url(); ?>assets/green-horizotal/js/datapicker/bootstrap-datepicker.js"></script>
            <script src="<?php echo base_url(); ?>assets/green-horizotal/js/datapicker/datepicker-active.js"></script>
    <!-- main JS
      ============================================ -->
      <script src="<?php echo base_url(); ?>assets/green-horizotal/js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
        <!-- icheck JS
            ============================================ -->
            <script src="<?php echo base_url(); ?>assets/green-horizotal/js/icheck/icheck.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/green-horizotal/js/icheck/icheck-active.js"></script>

            <script src="<?php echo base_url(); ?>assets/green-horizotal/js/tawk-chat.js"></script>
            <script src="https://code.highcharts.com/highcharts.js"></script>          
            <script src="https://code.highcharts.com/modules/drilldown.js"></script>          
            <script src="https://code.highcharts.com/modules/heatmap.js"></script>
            <script src="https://code.highcharts.com/modules/treemap.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        </body>

        <script>
            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: '',
                    align: 'left'
                },
                subtitle: {
                    text:
                    '',
                    align: 'left'
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                    crosshair: true,
                    accessibility: {
                        description: 'Countries'
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah Pasien'
                    }
                },
                tooltip: {
                    valueSuffix: ' (1000 MT)'
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [
                {
                    name: 'Swasta Umum',
                    data: [406292, 260000, 107000, 68300, 27500, 14500]
                },
                {
                    name: 'BPJS',
                    data: [51086, 136000, 5500, 141000, 107180, 77000]
                },
                {
                    name: 'Jasa Raharja',
                    data: [5108, 1360, 550, 14100, 10180, 7700]
                }
                ]
            });

            Highcharts.chart('container2', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        autoRotation: [-45, -90],
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Population (millions)'
                    }
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: 'Population in 2021: <b>{point.y:.1f} millions</b>'
                },
                series: [{
                    name: 'Jumlah',
                    colors: [
                    '#9b20d9', '#9215ac', '#861ec9', '#7a17e6', '#7010f9', '#691af3',
                    '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf',
                    '#3667c9', '#2f72c3', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                    '#03c69b',  '#00f194'
                    ],
                    colorByPoint: true,
                    groupPadding: 0,
                    data: [
                    ['dr. A', 37.33],
                    ['dr. B', 31.18],
                    ['dr. C', 27.79],
                    ['dr. D', 22.23],
                    ['dr. E', 21.91],
                    ['dr. F', 21.74],
                    ['dr. G', 21.32],
                    ['dr. H', 20.89],
                    ['dr. I', 20.67],
                    ['dr. J', 19.11],
                    ['dr. K', 16.45],
                    ['dr. L', 16.38],
                    ['dr. M', 15.41],
                    ['dr. N', 15.25],
                    ['dr. O', 14.974],
                    ['dr. P', 14.970],
                    ['dr. Q', 14.86],
                    ['dr. R', 14.16],
                    ['dr. S', 13.79],
                    ['dr. T', 13.64],
                    ['dr. u', 15.41],
                    ['dr. v', 15.25],
                    ['dr. w', 14.974],
                    ['dr. x', 14.970],
                    ['dr. y', 14.86],
                    ['dr. z`', 14.16],
                    ['dr. A1', 13.79],
                    ['dr. A2', 13.64]
                    ],
                    dataLabels: {
                        enabled: true,
                        rotation: -90,
                        color: '#FFFFFF',
                        align: 'right',
            format: '{point.y:.1f}', // one decimal
            inside: true,
            rotation: 270,
            x: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});

            Highcharts.chart('container3', {
                colorAxis: {
                    minColor: Highcharts.getOptions().colors[2],
                    maxColor: '#FFFFFF'
                },
                series: [{
                    type: 'treemap',
                    layoutAlgorithm: 'squarified',
                    clip: false,
                    data: [{
                        name: 'PPK A',
                        value: 6,
                        colorValue: 1
                    }, {
                        name: 'PPK B',
                        value: 6,
                        colorValue: 2
                    }, {
                        name: 'PPK C',
                        value: 4,
                        colorValue: 3
                    }, {
                        name: 'PPK D',
                        value: 3,
                        colorValue: 4
                    }, {
                        name: 'PPK E',
                        value: 2,
                        colorValue: 5
                    }, {
                        name: 'PPK F',
                        value: 2,
                        colorValue: 6
                    }, {
                        name: 'PPK G',
                        value: 1,
                        colorValue: 7
                    }]
                }],
                title: {
                    text: ''
                }
            });

            Highcharts.chart('container4', {
                chart: {
                    type: 'column'
                },
                title: {
                    align: 'left',
                    text: ''
                },
                subtitle: {
                    align: 'left',
                    text: 'Click the columns to view detail'
                },
                accessibility: {
                    announceNewData: {
                        enabled: true
                    }
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Jumlah'
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}%'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },

                series: [
                {
                    name: 'Kabupaten',
                    colorByPoint: true,
                    data: [
                    {
                        name: 'Sleman',
                        y: 63.06,
                        drilldown: 'Chrome'
                    },
                    {
                        name: 'Bantul',
                        y: 19.84,
                        drilldown: 'Safari'
                    },
                    {
                        name: 'Gunung Kidul',
                        y: 4.18,
                        drilldown: 'Firefox'
                    },
                    {
                        name: 'Kulon Progo',
                        y: 4.12,
                        drilldown: 'Edge'
                    },
                    {
                        name: 'Kota Yogyakarta',
                        y: 2.33,
                        drilldown: 'Opera'
                    },
                    {
                        name: 'Klaten',
                        y: 0.45,
                        drilldown: 'Internet Explorer'
                    }
                    ]
                }
                ],
                drilldown: {
                    breadcrumbs: {
                        position: {
                            align: 'right'
                        }
                    },
                    series: [
                    {
                        name: 'Chrome',
                        id: 'Chrome',
                        data: [
                        [
                        'v65.0',
                        0.1
                        ],
                        [
                        'v64.0',
                        1.3
                        ],
                        [
                        'v63.0',
                        53.02
                        ],
                        [
                        'v62.0',
                        1.4
                        ],
                        [
                        'v61.0',
                        0.88
                        ],
                        [
                        'v60.0',
                        0.56
                        ],
                        [
                        'v59.0',
                        0.45
                        ],
                        [
                        'v58.0',
                        0.49
                        ],
                        [
                        'v57.0',
                        0.32
                        ],
                        [
                        'v56.0',
                        0.29
                        ],
                        [
                        'v55.0',
                        0.79
                        ],
                        [
                        'v54.0',
                        0.18
                        ],
                        [
                        'v51.0',
                        0.13
                        ],
                        [
                        'v49.0',
                        2.16
                        ],
                        [
                        'v48.0',
                        0.13
                        ],
                        [
                        'v47.0',
                        0.11
                        ],
                        [
                        'v43.0',
                        0.17
                        ],
                        [
                        'v29.0',
                        0.26
                        ]
                        ]
                    },
                    {
                        name: 'Firefox',
                        id: 'Firefox',
                        data: [
                        [
                        'v58.0',
                        1.02
                        ],
                        [
                        'v57.0',
                        7.36
                        ],
                        [
                        'v56.0',
                        0.35
                        ],
                        [
                        'v55.0',
                        0.11
                        ],
                        [
                        'v54.0',
                        0.1
                        ],
                        [
                        'v52.0',
                        0.95
                        ],
                        [
                        'v51.0',
                        0.15
                        ],
                        [
                        'v50.0',
                        0.1
                        ],
                        [
                        'v48.0',
                        0.31
                        ],
                        [
                        'v47.0',
                        0.12
                        ]
                        ]
                    },
                    {
                        name: 'Internet Explorer',
                        id: 'Internet Explorer',
                        data: [
                        [
                        'v11.0',
                        6.2
                        ],
                        [
                        'v10.0',
                        0.29
                        ],
                        [
                        'v9.0',
                        0.27
                        ],
                        [
                        'v8.0',
                        0.47
                        ]
                        ]
                    },
                    {
                        name: 'Safari',
                        id: 'Safari',
                        data: [
                        [
                        'v11.0',
                        3.39
                        ],
                        [
                        'v10.1',
                        0.96
                        ],
                        [
                        'v10.0',
                        0.36
                        ],
                        [
                        'v9.1',
                        0.54
                        ],
                        [
                        'v9.0',
                        0.13
                        ],
                        [
                        'v5.1',
                        0.2
                        ]
                        ]
                    },
                    {
                        name: 'Edge',
                        id: 'Edge',
                        data: [
                        [
                        'v16',
                        2.6
                        ],
                        [
                        'v15',
                        0.92
                        ],
                        [
                        'v14',
                        0.4
                        ],
                        [
                        'v13',
                        0.1
                        ]
                        ]
                    },
                    {
                        name: 'Opera',
                        id: 'Opera',
                        data: [
                        [
                        'v50.0',
                        0.96
                        ],
                        [
                        'v49.0',
                        0.82
                        ],
                        [
                        'v12.1',
                        0.14
                        ]
                        ]
                    }
                    ]
                }
            });

        // Data retrieved from https://netmarketshare.com/
// Make monochrome colors
const colors = Highcharts.getOptions().colors.map((c, i) =>
    // Start out with a darkened base color (negative brighten), and end
    // up with a much brighter color
    Highcharts.color(Highcharts.getOptions().colors[2])
    .brighten((i - 3) / 7)
    .get()
    );

// Build the chart
Highcharts.chart('container5', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '',
        align: 'left'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            colors,
            borderRadius: 5,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        name: 'Share',
        data: [
        { name: 'Chrome', y: 74.03 },
        { name: 'Edge', y: 12.66 },
        { name: 'Firefox', y: 4.96 },
        { name: 'Safari', y: 2.49 },
        { name: 'Internet Explorer', y: 2.31 },
        { name: 'Other', y: 3.398 }
        ]
    }]
});

const colors1 = Highcharts.getOptions().colors.map((c, i) =>
    // Start out with a darkened base color (negative brighten), and end
    // up with a much brighter color
    Highcharts.color(Highcharts.getOptions().colors[2])
    .brighten((i - 3) / 7)
    .get()
    );

// Build the chart
Highcharts.chart('container6', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '',
        align: 'left'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            colors1,
            borderRadius: 5,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        name: 'Share',
        data: [
        { name: 'Chrome', y: 74.03 },
        { name: 'Edge', y: 12.66 },
        { name: 'Firefox', y: 4.96 },
        { name: 'Safari', y: 2.49 },
        { name: 'Internet Explorer', y: 2.31 },
        { name: 'Other', y: 3.398 }
        ]
    }]
});


Highcharts.chart('container7', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: '',
        align: 'left'
    },
    subtitle: {
        text: '',
        align: 'left'
    },
    xAxis: [{
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}Rp',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Target',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Pendapatan',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} Rp',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        align: 'left',
        x: 80,
        verticalAlign: 'top',
        y: 60,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
        },
        series: [{
            name: 'Pendapatan',
            type: 'column',
            yAxis: 1,
            data: [27.6, 28.8, 21.7, 34.1, 29.0, 28.4, 45.6, 51.7, 39.0,
            60.0, 28.6, 32.1],
            tooltip: {
                valueSuffix: ' Rp'
            }

        }, {
            name: 'Target',
            type: 'spline',
            data: [3,3,3,3,3,3,3,3,3,3,3,3],
            tooltip: {
                valueSuffix: 'Rp'
            }
        }]
    });


</script>

</html>