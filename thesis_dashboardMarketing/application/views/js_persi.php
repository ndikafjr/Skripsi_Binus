
<?php
/*if (is_array($radar_arafah) || is_object($radar_arafah)){

    foreach($radar_arafah as $rad_ar){
        $bulanar[] = $rad_ar->BULAN;
        $borar[] = (float)($rad_ar->BOR);
        $bangsalar[] = $rad_ar->BANGSAL;
    }
    foreach($radar_hal as $rad_hal){
        $bulanhal[] = $rad_hal->BULAN;
        $borhal[] = (float)($rad_hal->BOR);
        $bangsalhal[] = $rad_hal->BANGSAL;
    }
    foreach($radar_ism as $rad_ism){
        $bulanism[] = $rad_ism->BULAN;
        $borism[] = (float)($rad_ism->BOR);
        $bangsalism[] = $rad_ism->BANGSAL;
    }
    foreach($radar_mad as $rad_mad){
        $bulanmad[] = $rad_mad->BULAN;
        $bormad[] = (float)($rad_mad->BOR);
        $bangsalmad[] = $rad_mad->BANGSAL;
    }
    foreach($radar_rau as $rad_rau){
        $bulanrau[] = $rad_rau->BULAN;
        $borrau[] = (float)($rad_rau->BOR);
        $bangsalrau[] = $rad_rau->BANGSAL;
    }
    foreach($radar_ruh as $rad_ruh){
        $bulanruh[] = $rad_ruh->BULAN;
        $borruh[] = (float)($rad_ruh->BOR);
        $bangsalruh[] = $rad_ruh->BANGSAL;
    }
}*/
?>

<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
  </div>
  <strong>Copyright &copy; 2023 <a href="https://adminlte.io">IT RSIY PDHI</a>.</strong> All rights
  reserved.
</footer>

  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>>
<script src="https://code.highcharts.com/modules/heatmap.js"></script>
<script src="https://code.highcharts.com/modules/treemap.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<!-- page script -->
<script>
// Highcharts.chart('container', {

//     yAxis: {
//         title: {
//             text: 'Jumlah Rujukan'
//         }
//     },

//     xAxis: {
//         accessibility: {
//             rangeDescription: 'Range: 2010 to 2020'
//         }
//     },

//     legend: {
//         layout: 'vertical',
//         align: 'right',
//         verticalAlign: 'middle'
//     },

//     plotOptions: {
//         series: {
//             label: {
//                 connectorAllowed: false
//             },
//             pointStart: 1
//         }
//     },

//     series: [
//        <?php
//         $numItems = count($faskes);
//         $i = 0;
//         foreach ($faskes as $t) {?>
//         {    
//         name: <?php //echo '"'.$t->NAMA.'"'; ?>,
//         data: [43934, 48656, 65165, 81827, 112143, 142383,
//             171533, 165174, 155157, 161454, 154610]
//     } <?php //if(++$i === $numItems) { 
//         echo '';
//         }else{
//         echo ',';
//         }?>
//     <?php //} ?>],

//     responsive: {
//         rules: [{
//             condition: {
//                 maxWidth: 500
//             },
//             chartOptions: {
//                 legend: {
//                     layout: 'horizontal',
//                     align: 'center',
//                     verticalAlign: 'bottom'
//                 }
//             }
//         }]
//     }

// });


Highcharts.chart('container', {
    chart: {
        type: 'line',
        height: 200,
        width: 350
    },
    title: {
        text: 'Rujukan Bulanan'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Jumlah'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
        series: [
       <?php
        $numItems = count($faskes);
        $i = 0;
        foreach ($faskes as $t) {?>
        {    
        name: <?php echo '"'.$t->NAMA.'"'; ?>,
        data: <?php echo '[';
            $CI =& get_instance();
            $CI->load->model('M_dashrs');
            $result= $CI->M_dashrs->get_jumlah_faskes_perid_bulanan('2020',$t->NAMA);
            $numItems = count($result);
            $i = 0;        
            foreach($result as $rad){
                if(++$i === $numItems) {
                    echo json_encode((float)$rad->JUMLAH);
                }else{
                    echo json_encode((float)$rad->JUMLAH).',';
                }
            } ?><?php echo ']';?><?php 
                echo ',';?>
    } <?php if(++$i === $numItems) { 
        echo '';
        }else{
        echo ',';
        }?>
    <?php } ?>]
});

Highcharts.chart('containerTahunan', {
    chart: {
        type: 'line',
        height: 200,
        width: 350
    },
    title: {
        text: 'Rujukan Bulanan'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['2018','2019','2020','2021','2022','2023']
    },
    yAxis: {
        title: {
            text: 'Jumlah'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
        series: [
       <?php
        $numItems = count($faskes);
        $i = 0;
        foreach ($faskes as $t) {?>
        {    
        name: <?php echo '"'.$t->NAMA.'"'; ?>,
        data: [43934, 48656, 65165, 81827, 112143]
    } <?php if(++$i === $numItems) { 
        echo '';
        }else{
        echo ',';
        }?>
    <?php } ?>]
});


Highcharts.chart('containerHarian', {
    chart: {
        height: 200,
        width: 350
    },
    colorAxis: {
        minColor: '#FFFFFF',
        maxColor: Highcharts.getOptions().colors[0]
    },
    series: [{
        type: 'treemap',
        layoutAlgorithm: 'squarified',
        clip: false,
        data: [{
            name: 'A',
            value: 6,
            colorValue: 1
        }, {
            name: 'B',
            value: 6,
            colorValue: 2
        }, {
            name: 'C',
            value: 4,
            colorValue: 3
        }, {
            name: 'D',
            value: 3,
            colorValue: 4
        }, {
            name: 'E',
            value: 2,
            colorValue: 5
        }, {
            name: 'F',
            value: 2,
            colorValue: 6
        }, {
            name: 'G',
            value: 1,
            colorValue: 7
        },{
            name: 'A',
            value: 6,
            colorValue: 1
        }, {
            name: 'B',
            value: 6,
            colorValue: 2
        }, {
            name: 'C',
            value: 4,
            colorValue: 3
        }, {
            name: 'D',
            value: 3,
            colorValue: 4
        }, {
            name: 'E',
            value: 2,
            colorValue: 5
        }, {
            name: 'F',
            value: 2,
            colorValue: 6
        }, {
            name: 'G',
            value: 1,
            colorValue: 7
        },{
            name: 'A',
            value: 6,
            colorValue: 1
        }, {
            name: 'B',
            value: 6,
            colorValue: 2
        }, {
            name: 'C',
            value: 4,
            colorValue: 3
        }, {
            name: 'D',
            value: 3,
            colorValue: 4
        }, {
            name: 'E',
            value: 2,
            colorValue: 5
        }, {
            name: 'F',
            value: 2,
            colorValue: 6
        }, {
            name: 'G',
            value: 1,
            colorValue: 7
        }]
    }],
    title: {
        text: 'Data Rujukan Harian'
    }
});
</script>
</body>
</html>


