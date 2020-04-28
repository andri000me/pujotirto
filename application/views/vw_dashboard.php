<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Covid19 | Pujotirto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Dashboard | Covid19 | Desa Pujotirto" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>gambar/covid.png">

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo  base_url(); ?>assets/plugins/morris/morris.css">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo  base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?php echo  base_url(); ?>assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo  base_url(); ?>assets/css/style.css" rel="stylesheet">
        
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  border-color: #089ce4;
}

.container {
  padding: 2px 16px;
} 
</style>
</head>


    <body>
<div id="page-wrapper">
    <!-- Top Bar Start -->
    <div class="topbar" id="topnav">
                <!-- Top navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="">
                    <a href="<?php echo base_url(); ?>dashboard" class="logo">
                        COVID19
                    </a>
                </div>
            </div>
            <div class="navbar-custom navbar-right">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>dashboard">
                                <span><i class="ti-home"></i></span><span> Beranda </span> </a>
                        </li>

                        <li class="has-submenu">
                            <a href="#"><span><i class="mdi mdi-newspaper "></i></span><span>Berita</span> </a>
                            <ul class="submenu">
                                <li><a href="<?php echo base_url();?>berita">Berita Terkini</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <span><i class="mdi mdi-information "></i></span><span>Informasi</span> </a>
                            <ul class="submenu">
                                <li><a href="<?php echo base_url();?>info/covid">Apa Sih Covid19.?</a></li>
                                <li><a href="<?php echo base_url();?>info/saran_masukan">Kritik/Saran</a></li>
                                <li><a href="<?php echo base_url();?>info">Hubungi Kami</a></li>
                                <li><a href="<?php echo base_url();?>info/info_kami">Tentang Kami</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- End navigation menu  -->
                </div>
            </div>

            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                <li class="top-menu-item-xs">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>
            </ul>

        </div>
    </div> <!-- end container -->
</div> <!-- end navbar -->
    </div>
    <!-- Top Bar End -->

<!-- Page content start -->
<?php $this->load->view($content); ?>

<a href="<?php echo base_url(); ?>dashboard" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;">
  <i class="fa fa-facebook"></i> Share on Facebook
</a> <hr>

</div>
<!-- end container -->

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pull-right hidden-xs">
                            Pujotirto <strong class="text-custom"></strong>
                        </div>
                        <div>
                            <strong>belajarbarengseru.com</strong> - Copyright &copy; 2020
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end footer -->

    </div>
    <!-- End #page-right-content -->

    <div class="clearfix"></div>

</div>
            <!-- end .page-contentbar -->
        </div>
        <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
        <!-- End #page-wrapper -->
        <script type="text/javascript" src="https://app.diagrams.net/js/viewer.min.js"></script>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo  base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo  base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo  base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>

        <!--Morris Chart-->
		<script src="<?php echo  base_url(); ?>assets/plugins/morris/morris.min.js"></script>
		<script src="<?php echo  base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<!-- <script src="<?php echo  base_url(); ?>assets/pages/jquery.dashboard.js"></script> -->

        <!-- App Js -->
        <script src="<?php echo  base_url(); ?>assets/js/jquery.app.js"></script>

<script>
Morris.Area({
  element: 'chart_pemudik',
  data: [
<?php foreach($getDataPemudik->result() as $row){?>

    { y: '<?php echo $row->tanggal_pulang; ?>', a: <?php echo $row->total; ?>, },

    <?php }?>
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Pemudik']
});

</script>

    </body>
</html>