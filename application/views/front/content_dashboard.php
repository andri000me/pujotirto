<div class="page-contentbar">
    <!-- START PAGE CONTENT -->
    <div id="page-right-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="header-title m-t-0 m-b-20 card"><center style="padding-bottom: 10px;  padding-top: 10px;"><img src="<?php echo base_url();?>gambar/kebumen.png" width="150px" height="100px" style="display: block; margin: auto;">DESA PUJOTIRTO</center></h1><hr> 
                    <h4><center>KAWAL CORONA</center></h4>
                    <marquee width="100%" height="40" direction="left"><font color="red"><p><b>Untuk pemudik diharapkan jangan mudik terlebih dahulu, sayangi keluarga anda !</b></p></font></marquee>
                    <hr>
                </div>
        </div> <!-- end row --></br>
            
        <div class="row">
            <div class="col-sm-4">
                <?php foreach($getPositif as $row3){?>
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Positif</center></h4><hr>
                    <h2 class="m-b-20"><font color="blue"><center><?php echo $row3->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
                <?php }?>
            </div>

            <div class="col-sm-4">
            <?php foreach($getSembuh as $row4){?>
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Sembuh</center></h4><hr>
                    <h2 class="m-b-20"><font color="green"><center><?php echo $row4->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
            <?php }?>
            </div>

            <div class="col-sm-4">
                <?php foreach($getMeninggal as $row5){?>
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Meninggal</center></h4><hr>
                    <h2 class="m-b-20"><font color="red"><center><?php echo $row5->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
                <?php }?>
            </div>
        
        <div class="col-xs-12">
            <div class="card-box card">
                <div class="card-body">
                <h4 class="card-title text-uppercase mb-0 text-center">Total Pemudik</h4>
                    <h2 class="h2 font-weight-bold mt-1 mb-20 text-center color-yellow">

                    <?php foreach($getPemudik as $row2){?>
                       <font color="#ffcc00"><?php echo $row2->total; ?></font> </h2>
                    <?php }?>
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                    </div>
                    <p class="mt-3 mb-0 text-md text-center">
                        <span class="text-nowrap">Orang</span>
                    </p><hr>
                    <center>
                    <div class="row border-top">
                    

                <?php foreach($getTotalPerRw as $row){?>
                <div class="col-xs-2">
                    <h4 class="f-size-sm h4 font-weight-bold mt-1 mb-0 text-center color-black">
                        <span class="">RW <?php echo $row->rw; ?></span></h4>
                    <h4 class="mt-0 mb-1 text-md text-center">
                    <font color="black"><?php echo $row->total; ?></font> <hr>
                    </h4>
                </div>
                <?php }?>


                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="card-box card">
                <div class="card-body">
                <h4 class="card-title text-uppercase mb-0 text-center">Orang Dalam Pengawasan (ODP)</h4>
                    <h2 class="h2 font-weight-bold mt-1 mb-0 text-center color-yellow">
                    <?php foreach($getODP as $row){?>
                    <font color="black"><?php echo $row->total; ?></font> </h2>
                    <?php }?>
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                    </div>
                    <p class="mt-3 mb-0 text-md text-center">
                        <span class="text-nowrap">Total ODP</span>
                    </p><hr>
                    <center>
                    <div class="row border-top">
                    <?php foreach($getDataMasihKarantina as $row){?>
                        <div class="col-xs-6">
                            <h2 class="f-size-sm h2 font-weight-bold mt-1 mb-0 text-center color-yellow">
                            <font color="red"><?php echo $row->total; ?></font> </h2></h2>
                            <p class="mt-0 mb-1 text-md text-center">
                                <span class="">Dalam Karantina</span>
                            </p>
                        </div>
                    <?php }?>

                    <?php foreach($getDataKarantinaSelesai as $row){?>
                        <div class="col-xs-6">
                            <h2 class="f-size-sm h2 font-weight-bold mt-1 mb-0 text-center color-yellow">
                            <font color="green"><?php echo $row->total; ?></font> </h2></h2>
                            <p class="mt-0 mb-1 text-md text-center">
                                <span class="">Selesai Karantina</span>
                            </p>
                        </div>
                        <?php }?>

                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="card-box card">
                <div class="card-body">
                <h4 class="card-title text-uppercase mb-0 text-center">Pasien Dalam Pantauan (PDP)</h4>
                    <h2 class="h2 font-weight-bold mt-1 mb-20 text-center color-yellow">

                    <?php foreach($getPDP as $row1){?>
                       <font color="red"><?php echo $row1->total; ?></font> </h2>
                    <?php }?>
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                    </div>
                    <p class="mt-3 mb-0 text-md text-center">
                        <span class="text-nowrap">Orang</span>
                    </p><hr>
                    <center>
                    <div class="row border-top">


                <?php foreach($getTotalPerRwPdp as $row){?>
                <div class="col-xs-2">
                    <h4 class="f-size-sm h4 font-weight-bold mt-1 mb-0 text-center color-black">
                        <span class="">RW <?php echo $row->rw; ?></span></h4>
                    <h4 class="mt-0 mb-1 text-md text-center">
                    <font color="black"><?php echo $row->total; ?></font> <hr>
                    </h4>
                </div>
                <?php }?>

                    </div>
                </div>
            </div>
		</div>

    </div>


     <div class="row">
        <div class="col-lg-12">
            <div class="card-box card">
                <h4 class="m-t-0">Grafik Pemantau Pemudik</h4>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li>
                            <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Pemudik</h5>
                        </li>
                    </ul>
                </div>
                <div id="chart_pemudik" style="height: 300px;"></div>
            </div>
        </div> 
    </div>  


<div class="row">
    <div class="col-sm-6">
        <div class="card-box card">
            <h4 class="m-t-0">PROSEDUR PEMUDIK</h4>
            <center><div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;toolbar&quot;:&quot;zoom layers lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile host=\&quot;app.diagrams.net\&quot; modified=\&quot;2020-04-08T08:04:05.513Z\&quot; agent=\&quot;5.0 (Macintosh; Intel Mac OS X 10_15_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36\&quot; etag=\&quot;vOlTH2NiZ7u5FsrS9MX9\&quot; version=\&quot;12.9.9\&quot; type=\&quot;google\&quot;&gt;&lt;diagram name=\&quot;Page-1\&quot; id=\&quot;97916047-d0de-89f5-080d-49f4d83e522f\&quot;&gt;7Zpde6I6EIB/jZfdhw9FucyRFKmIPgLtdu9Q48dZNB7Ere6v3wTCp1httUhP14uWTEJIJsw7kwk1sb3cqZ6znvfwBLk1gZvsaqJSEwS+JQvkH5XsmUQQWqFk5i0mTJYIzMVvxIQck24XE7TJNPQxdv3FOisc49UKjf2MzPE8/JJtNsVu9qlrZ4YOBObYcSPpt0Yif1pM/DmT85KcVHTQYjZnD28JzbBi5Ix/zjy8XbEn1gRxGvzC6qUT9cWmupk7E/ySEomwJrY9jP3warlrI5eqN1JceN/9kdp4Ph5a+efcoLo9zubW3GgyE/ejLjf93RTuGhIbnL+PVIImREOsiD1/jmd45bgwkf4TTBrRbjlSStroGK+JkCfCf5Hv79lyO1sfE9HcX7qslqhiTWumLtoBuopENl24bhu72AtGIU4c1JqOaVvfwz9RqkYat9BoSmoOFcB0ssFbb4xemzVbdDrV1J1MbyrCS+R7e9LAQ67jL35lXyGHvXOzuF186wAvyFgEjhlIk2NrH5lHk8t24TveDPnsrmTtyEVqGIkoWNG3rC6b5y/H3aLoLZVcn6ob00dKMz9QZCgb5QVho9TLIf23xVHF3SZYXkAaiNJ6l1Tme9lGAi2SkMls862IrHBMXl6yWTurcwYl1IsGNYCGAixgqDVqLvGjw04LZz+OX72kL2LpIvmlRe8dkAKGRC+cboMh+WdAFQZl+i7E0m7foh08aTp4Bh1yNbAf+pY2tPpRyyM65Mqdy4++QSt7cEhH+eq6EvHB63bQNEemLHde5gsfmWsnsPQX4p+yjLkiT34hz0e7V0ER1QpZg2+x4kviWcTI9c1TToVvccfZkqHCmxHQegfgi/h8MfRLBXyzHMDzgnxjwjerRfgqIF4ndDftgPADWw9R34VDu0eh1K4K97tgCAxLC4EJDEULsG9CHfSoiK+TP53AN3xBjuYDp9tzVBK/JEflkjhab2QXXOJL5qhcMY5WAaQmDUZptQ4G/SAOhZSpkMR3mmEFgagCTRBHqyawVGCSi3b/UVN4OalPxauVAXCPoFa3A+j2zHgOFtTv48IT+JL0PYhqivArFOFX/jD81gvsM6fYItqi1YRdKmPX2WwW4w/T70lGprTXKFBeJLs2Sut1OdtHSP0DlB72xPEnevpgKEvvSU59ep8rlZScqou51W2U63KlC5NT5/q2M13u4wmHW+Soru1wH7QurQQKCJytbneA8eYh/D99Un5HIEq33xJUJrVC1Ortv9P7vzWi4jPrLigou0xpz0qlYo1lKkKqvNawpD2H0Gxk3qhmyVsO6cLUzbX5d2rHUQYALWiBAd02aCxdw/Wg8QB0YGi19yazr51u+coUzue3K0DhJn+gx68QJMpn0jTKR1+Pppf5zAvzLFeHXhWoBwxVDU/4aMwHhmo653I83TKAlh3mW7rQhB16qplNtXC5FMc9zWfcW1Af/MVZIc6k+u1xdpjXuHlQmQkpkwizAkFlRLfTGBTLCSql/HkgV3JUGWmkOoCtAmG7fcO0dQuYWgBRQw1RWQjQBJohKbla452Z6eiLk6KnWJoCumF8G36PQh84IAOExjG+NujznCUF52q0Wf+NSo9hXBZuj3GxUmb4/So2eO4h16vJLRXS/dyFu7keNeHgI6PwTCo+cDr2HRToBlYXZtZSFtmxTZtePIefCVDb75rAYM0H0ACUFUGB7hWNB9synk+dCn0Ku6PPZr6f2tY17DDv/GSuwA7lAjuMv5G9xA51Fdvuj90WAu1RsZePT/PN6o6/zAyvfax7Kslcxqkus8PIAeWSze3A733OLEwFreyICRUY2vmnsfG3ER9xHEuKySfpYVCafPovwj8=&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div></center>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card-box card">
            <h4 class="m-t-0">CONTACT PERSON</h4></br>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default panel-fill">
                    <div class="panel-heading">
                        <h3 class="panel-title">PELAPORAN DAN INFORMASI</h3>
                    </div>
                    <div class="panel-body">
                        <div class="m-b-20">
                            <strong>Bp Giriyanto</strong>
                            <p class="text-muted"><a href="https://wa.me/+6281804777678?" target="_blank"><i class="mdi mdi-whatsapp"></i> 0818-0477-7678</p></a>
                        </div><hr>
                        <div class="m-b-20">
                            <strong>Bp Tofikun</strong>
                            <p class="text-muted"><a href="https://wa.me/+6282133965595" target="_blank"><i class="mdi mdi-whatsapp"></i> 0821-3396-5595</p></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default panel-fill">
                    <div class="panel-heading">
                        <h3 class="panel-title">KESEHATAN DAN KONSULTASI</h3>
                    </div>
                    <div class="panel-body">
                        <div class="m-b-20">
                            <strong>Ibu Widyati</strong>
                            <p class="text-muted"><a href="https://wa.me/+6287837872754" target="_blank"><i class="mdi mdi-whatsapp"></i> 0878-3787-2754</p></a>
                        </div><hr>
                        <div class="m-b-20">
                            <strong>Ibu Susan</strong>
                            <p class="text-muted"><a href="https://wa.me/+6285385366372" target="_blank"><i class="mdi mdi-whatsapp"></i> 0853-8536-6372</p></a>
                        </div><hr>
                        <div class="m-b-20">
                            <strong>Bp Sutik</strong>
                            <p class="text-muted"><a href="https://wa.me/+6281393750430" target="_blank"><i class="mdi mdi-whatsapp"></i> 0813-9375-0430</p></a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        </div>
    </div>
    <!-- <div class="col-sm-12">
            <div class="card-box card">
        <?php 
            foreach($get_data_covid as $row){?>
            <div class="alert-secondary" role="alert">
            <center>
            <h3><b>Update Corona Virus <?php echo $row->name;?></b></h3><hr>
            <p><b>Positif</b>    : <span class="badge badge-primary"><?php echo $row->positif;?></span> | 
                <b>Sembuh   </b>  : <span class="badge badge-success"><?php echo $row->sembuh;?> </span> | 
                <b>Meninggal</b>  : <span class="badge badge-danger"><?php echo $row->meninggal;?></span></p>
                <p>Source data : <a href="https://kawalcorona.com" target="_blank" style="text-decoration:none;">kawalkorona.com</a></p>
            </center>
            </div>
        <?php }?>
            </div>
        </div> -->
</div>