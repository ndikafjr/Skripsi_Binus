
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DASHBOARD MARKETING
        <small>RS ISLAM YOGYAKARTA PDHI</small>
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">ChartJS</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form method="POST" action="<?php echo base_url() ?>index.php/Dash/indexBangsal1/" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-5">
          <div class="form-group">
            <label>Bulan</label>
            <select class="form-control select2" style="width: 100%;" name=bulan>
              <option value="01">JANUARI</option>
              <option value="02">FEBRUARI</option>
              <option value="03">MARET</option>
              <option value="04">APRIL</option>
              <option value="05">MEI</option>
              <option value="06">JUNI</option>
              <option value="07">JULI</option>
              <option value="08">AGUSTUS</option>
              <option value="09">SEPTEMBER</option>
              <option value="10">OKTOBER</option>
              <option value="11">NOVEMBER</option>
              <option value="12">DESEMBER</option>
            </select>
          </div>
        </div>
        <!-- /.form-group -->
        <div class="col-md-5">
          <div class="form-group">
            <label>Tahun</label>
           <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="tahun">
             <?php
              $tg_awal= date('Y')-6;
              $tgl_akhir= date('Y')+5;
              for ($i=$tgl_akhir; $i>=$tg_awal; $i--)
              {
                echo "
                <option value='$i'";
                // if(date('Y')==$i){echo "selected";}
                echo">$i</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label></label>
          <button type="submit" class="btn btn-block btn-primary">Tampilkan</button>
        </div>
        </div>
        <!-- /.form-group -->
      </div>
    </form>
        <div class="row">
        <div class="col-md-4">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">JUMLAH RUJUKAN HARIAN</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
             <div id="containerHarian"></div>
                <!-- <canvas id="areaChart" style="height:250px"></canvas> -->
              </div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->

          <div class="col-md-4">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">JUMLAH RUJUKAN BULANAN</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
             <div id="container"></div>
                <!-- <canvas id="areaChart" style="height:250px"></canvas> -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="col-md-4">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">JUMLAH RUJUKAN TAHUNAN</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
             <div id="containerTahunan"></div>
                <!-- <canvas id="areaChart" style="height:250px"></canvas> -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <div class="row">
        <div class="col-md-4">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">JUMLAH ASURANSI HARIAN</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
             <div id="containerHarian"></div>
                <!-- <canvas id="areaChart" style="height:250px"></canvas> -->
              </div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->

          <div class="col-md-4">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">JUMLAH ASURANSI BULANAN</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
             <div id="container"></div>
                <!-- <canvas id="areaChart" style="height:250px"></canvas> -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="col-md-4">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">JUMLAH ASURANSI TAHUNAN</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
             <div id="containerTahunan"></div>
                <!-- <canvas id="areaChart" style="height:250px"></canvas> -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
