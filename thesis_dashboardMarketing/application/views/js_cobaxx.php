
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
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<!-- page script -->
<script>
  Highcharts.chart('container', {

    chart: {
        polar: true
    },

    title: {
        text: 'BOR Bangsal'
    },

    pane: {
        startAngle: 0,
        endAngle: 360
    },

    xAxis: {
        tickInterval: 45,
        min: 0,
        max: 360,
        labels: {
            format: '{value}°'
        }
    },

    yAxis: {
        min: 0
    },

    plotOptions: {
        series: {
            pointStart: 0,
            pointInterval: 120
        },
        column: {
            pointPadding: 0,
            groupPadding: 0
        }
    },

    series: [
    <?php  $numItemsb = count($nama_bangsal);
            $ib = 0;
    foreach($nama_bangsal as $xx) { ?>
{
            type: 'line',
            name: <?php echo '"'.$xx->BANGSAL.'"'; ?>,  
            data: <?php echo '[';
            $CI =& get_instance();
            $CI->load->model('M_dashrs');
            $result= $CI->M_dashrs->bor_bangsal_radar('2023',$xx->BANGSAL);
            $numItems = count($result);
            $i = 0;        
            foreach($result as $rad){
                if(++$i === $numItems) {
                    echo json_encode((float)$rad->BOR);
                }else{
                    echo json_encode((float)$rad->BOR).',';
                }
            } ?><?php echo ']';?>
            <?php //$bor[] = $rad->BOR;
            ?>
        }<?php if(++$ib === $numItemsb) {
                echo '';
            }else{
                echo ',';
            }
         } ?>]
    });


Highcharts.chart('container2', {

    chart: {
        polar: true,
        type: 'line'
    },

    accessibility: {
    },

    title: {
        text: 'Budget vs spending',
        x: -80
    },

    pane: {
        size: '80%'
    },

    xAxis: {
        categories: ['07','08','09'],
        tickmarkPlacement: 'on',
        lineWidth: 0
    },

    yAxis: {
        gridLineInterpolation: 'polygon',
        lineWidth: 0,
        min: 0
    },

    tooltip: {
        shared: true,
        pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },


    series: [
    <?php  $numItemsb = count($nama_bangsal);
            $ib = 0;
            $numItemsbb = count($nama_bangsal);
            $ibb = 0;
    foreach($nama_bangsal as $xx) { ?>
{
            name: <?php echo '"'.$xx->BANGSAL.'"'; ?>,  
            data: <?php echo '[';
            $CI =& get_instance();
            $CI->load->model('M_dashrs');
            $result= $CI->M_dashrs->bor_bangsal_radar('2023',$xx->BANGSAL);
            $numItems = count($result);
            $i = 0;        
            foreach($result as $rad){
                if(++$i === $numItems) {
                    echo json_encode((float)$rad->BOR);
                }else{
                    echo json_encode((float)$rad->BOR).',';
                }
            } ?><?php echo ']';?><?php 
                echo ',';?>

            pointPlacement: 'on'
            <?php //$bor[] = $rad->BOR;
            ?>
        }<?php if(++$ibb === $numItemsbb) {
                echo '';
            }else{
                echo ',';
            }
         } ?>],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                pane: {
                    size: '70%'
                }
            }
        }]
    }

});
</script>
</body>
</html>


