<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
    echo $info;
}
?>
<div class="page-contentbar">
    <div id="page-right-content">
        <div class="container">
</br>

<div class="row">
<div class="col-lg-12">
    <div class="card-box card">
        <div class="m-b-20 table-responsive">
           <div class="bootstrap-filestyle input-group">
            <span class="group-span-filestyle" tabindex="0" id="show_div_odp">
                <label for="filestyle-1" class="btn btn-default ">
                    <span class="icon-span-filestyle glyphicon glyphicon-plus">
                </span> 
            <span class="buttonText">Tambah Data</span></label></span>
            <a href="<?php echo base_url();?>perantau/add_perantau"><span class="group-span-filestyle " tabindex="0">
                <label for="filestyle-1" class="btn btn-default ">
                    <span class="icon-span-filestyle glyphicon glyphicon-refresh">
                </span> 
            <span class="buttonText">Reload</span></label></span></a>
        </div></br>
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nik/Ktp</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Rt</th>
                    <th>Rw</th>
                    <th>Nomor Telf</th>
                    <th>Dusun</th>
                    <th>Status</th>
                    <th>Waktu Karantina</th>
                    <th>Karantina Berakhir</th>
                    <th>Status Karantina</th>
                    <th>Kota Perantau</th>
                    <th>Pengaturan</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($getODP as $row){?>
                        <?php 
                        $date_karantina_finish = date_create("$row->finish_karantina");
                        $date_pulang = date_create("$row->tanggal_pulang");
                        ?>
                <tr>
                    <td><?php echo $row->nik; ?></td>
                    <td><?php echo $row->no_ktp; ?></td>
                    <td><?php echo $row->nama_lengkap; ?></td>
                    <td><?php echo $row->jenkel; ?></td>
                    <td><?php echo $row->rt; ?></td>
                    <td><?php echo $row->rw; ?></td>
                    <td><?php echo $row->no_telf; ?></td>
                    <td><?php echo $row->dusun; ?></td>
                    <td><span class="badge badge-warning"><?php echo $row->status_; ?></span></td>
                    <td><?php echo date_format($date_pulang, "d/m/Y"); ?></td> 
                    <td><?php echo date_format($date_karantina_finish, "d/m/Y"); ?></td>
                
                    <?php if($row->waktu_karantina <= 0){?>
                        <td><span class="badge badge-success">Karantina Selesai</span></td>
                    <?php }if($row->waktu_karantina == 14){?>
                        <td><span class="badge badge-warning">Karantina <?php echo $row->waktu_karantina; ?> Hari</span></td>
                    <?php } if($row->waktu_karantina >= 1 && $row->waktu_karantina <= 13){?>
                        <td><span class="badge badge-danger">Sisa Karantina <?php echo $row->waktu_karantina; ?> Hari</span></td>
                    <?php }?>

                    <td><?php echo $row->kota_perantau; ?></td>
                    <td><button type="button" class="btn btn-sm btn-warning" onclick="MasukPdp('<?php echo $row->nik; ?>')">Masuk PDP</button>
                    <?php if($this->session->userdata('level') == 'Dewa'){?>
                   <button type="button" class="btn btn-sm btn-info" onclick="EditOdp('<?php echo $row->nik; ?>')">Update Data</button>
                   <?php }else{
                   }?>
                </td> 
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-lg-12" id="form_update_perantau" style="display: none;">
        <div class="card-box card">
                <div class="p-20 m-b-20">
                    <form action="<?php echo base_url(); ?>perantau/UpdateDataPerantau" class="form-validation" method="POST">
                        
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Id<span class="text-danger">*</span></label>
                            <input type="number" name="nik" parsley-trigger="change" class="form-control" onKeyPress="if(this.value.length==16) return false;" min="0" autocomplete="off" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">NIK / KTP<span class="text-danger">*</span></label>
                            <input type="number" name="no_ktp" parsley-trigger="change" required placeholder="Masukan 16 digit nomor ktp" class="form-control" onKeyPress="if(this.value.length==16) return false;" min="0" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Nama Lengkap<span class="text-danger">*</span></label>
                            <input type="text" name="nama_lengkap" parsley-trigger="change" required placeholder="Masukan nama lengkap" class="form-control" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Jenis Kelamin<span class="text-danger">*</span></label>
                            <select name="jenkel" class="form-control" >
                            <option value="">--Pilih--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div>
                            <div class="input-group">
                                <input name="ttl" type="text" class="form-control" placeholder="bulan/tanggal/tahun" id="datepicker-autoclose" >
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Rt<span class="text-danger">*</span></label>
                        <input type="number" name="rt" parsley-trigger="change" required placeholder="RT" class="form-control" autocomplete="off" >
                    </div>
                </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Rw<span class="text-danger">*</span></label>
                            <input type="number" name="rw" parsley-trigger="change" required placeholder="RW" class="form-control" autocomplete="off" >
                        </div>
                    </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Dusun<span class="text-danger">*</span></label>
                            <input type="text" name="dusun" parsley-trigger="change" required placeholder="Dusun" class="form-control" autocomplete="off" onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                    </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kelurahan<span class="text-danger">*</span></label>
                            <input type="text" name="kelurahan" parsley-trigger="change" required value="Pujotirto" class="form-control" >
                        </div>
                    </div>
            
                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kecamatan<span class="text-danger">*</span></label>
                            <input type="text" name="kecamatan" value="Karang Sambung" parsley-trigger="change" required  class="form-control" >
                        </div>
                </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kabupaten<span class="text-danger">*</span></label>
                            <input type="text" name="kabupaten" value="Kebumen" parsley-trigger="change" required class="form-control" >
                        </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Nomor Telf<span class="text-danger">*</span></label>
                        <input type="number" name="no_telf" parsley-trigger="change" required placeholder="Masukan 12 digit nomor telf" class="form-control" onKeyPress="if(this.value.length==12) return false;" min="0" autocomplete="off">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tanggal Pulang</label>
                        <div>
                            <div class="input-group">
                                <input name="tanggal_pulang" type="date" class="form-control" placeholder="bulan/tanggal/tahun">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3"  style="display: none;">
                    <div class="form-group">
                        <label>Start Karantina</label>
                        <div>
                            <div class="input-group">
                            <input class="form-control" type="text" name="start_karantina"  value=" <?php
                            echo date("d-M-Y");
                            ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3"  style="display: none;">
                    <div class="form-group">
                        <label>Finish Karantina</label>
                        <div>
                            <div class="input-group">
                            <input class="form-control" type="text" name="finish_karantina"  value="<?php
                    $date = date_create();
                            date_add($date, date_interval_create_from_date_string('14 days'));
                            echo date_format($date, "d-M-Y");
                            ?>"readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Kota Perantau<span class="text-danger">*</span></label>
                        <input type="text" name="kota_perantau" parsley-trigger="change" required placeholder="Kota perantau" class="form-control" autocomplete="off">
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="userName">Alasan Pulang<span class="text-danger"></span></label>
                        <textarea class="form-control" rows="5" name="keterangan" placeholder="Ketik alasannya disini.." autocomplete="off"></textarea>                    
                    </div>
                </div>

    
            </div>
                        
            <div class="form-group text-right m-b-0">
                <button class="btn btn-primary waves-effect waves-light" type="submit">
                    Update Data
                </button>
            </div>
                </form>
        </div> 
    </div>
</div>

<div class="col-lg-12" id="form_update_pdp" style="display: none;">
        <div class="card-box card">
                <div class="p-20 m-b-20">
                    <form action="<?php echo base_url(); ?>perantau/UpdateDataOdpToPdp" class="form-validation" method="POST">
                        
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Id<span class="text-danger">*</span></label>
                            <input type="number" name="nik" parsley-trigger="change" class="form-control" onKeyPress="if(this.value.length==16) return false;" min="0" autocomplete="off" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">NIK / KTP<span class="text-danger">*</span></label>
                            <input type="number" name="no_ktp" parsley-trigger="change" readonly required placeholder="Masukan 16 digit nomor ktp" class="form-control" onKeyPress="if(this.value.length==16) return false;" min="0" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Nama Lengkap<span class="text-danger">*</span></label>
                            <input type="text" name="nama_lengkap" parsley-trigger="change" required placeholder="Masukan nama lengkap" class="form-control" autocomplete="off" readonly>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Jenis Kelamin<span class="text-danger">*</span></label>
                            <select name="jenkel" class="form-control" readonly>
                            <option value="">--Pilih--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div>
                            <div class="input-group">
                                <input name="ttl" type="text" class="form-control" placeholder="bulan/tanggal/tahun" id="datepicker-autoclose" readonly>
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Rt<span class="text-danger">*</span></label>
                        <input type="number" name="rt" parsley-trigger="change" required placeholder="RT" class="form-control" autocomplete="off" readonly>
                    </div>
                </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Rw<span class="text-danger">*</span></label>
                            <input type="number" name="rw" parsley-trigger="change" required placeholder="RW" class="form-control" autocomplete="off" readonly>
                        </div>
                    </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Dusun<span class="text-danger">*</span></label>
                            <input type="text" name="dusun" parsley-trigger="change" required placeholder="Dusun" class="form-control" autocomplete="off" onkeyup="this.value = this.value.toUpperCase();" readonly>
                        </div>
                    </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kelurahan<span class="text-danger">*</span></label>
                            <input type="text" name="kelurahan" parsley-trigger="change" required value="Pujotirto" class="form-control" readonly>
                        </div>
                    </div>
            
                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kecamatan<span class="text-danger">*</span></label>
                            <input type="text" name="kecamatan" value="Karang Sambung" parsley-trigger="change" required  class="form-control" readonly>
                        </div>
                </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kabupaten<span class="text-danger">*</span></label>
                            <input type="text" name="kabupaten" value="Kebumen" parsley-trigger="change" required class="form-control" readonly>
                        </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Nomor Telf<span class="text-danger">*</span></label>
                        <input type="number" name="no_telf" parsley-trigger="change" required placeholder="Masukan 12 digit nomor telf" class="form-control" onKeyPress="if(this.value.length==12) return false;" min="0" autocomplete="off">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Fasilitas Kesehatan<span class="text-danger">*</span></label>
                        <input type="text" name="fasilitas_kesehatan" parsley-trigger="change" required placeholder="Tempat Periksa" class="form-control" autocomplete="off">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tanggal Periksa</label>
                        <div>
                            <div class="input-group">
                                <input name="tanggal_periksa" type="text" class="form-control" placeholder="bulan/tanggal/tahun" id="datepicker">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3"  style="display: none;">
                    <div class="form-group">
                        <label>Start Karantina</label>
                        <div>
                            <div class="input-group">
                            <input class="form-control" type="text" name="start_karantina"  value=" <?php
                            echo date("d-M-Y");
                            ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3"  style="display: none;">
                    <div class="form-group">
                        <label>Finish Karantina</label>
                        <div>
                            <div class="input-group">
                            <input class="form-control" type="text" name="finish_karantina"   value="<?php
                    $date = date_create();
                            date_add($date, date_interval_create_from_date_string('14 days'));
                            echo date_format($date, "d-M-Y");
                            ?>"readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Status Karantina<span class="text-danger">*</span></label>
                            <select name="status_karantina" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="KARANTINA MANDIRI">Karantina Mandiri</option>
                            <option value="RAWAT JALAN">Rawat Jalan</option>
                            <option value="RAWAT INAP">Rawat Inap</option>
                            </select>
                        </div>
                    </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="userName">Keterangan sakit<span class="text-danger"></span></label>
                        <textarea class="form-control" rows="5" name="keterangan" placeholder="Ketik gejala sakit disini..." autocomplete="off"></textarea>                    
                    </div>
                </div>

            </div>
                        
            <div class="form-group text-right m-b-0">
                <button class="btn btn-primary waves-effect waves-light" type="submit">
                    Update
                </button>
            </div>
                </form>
        </div> 
    </div>
</div>
   
        <div class="col-lg-12 form_odp" style="display: none;">
            <div class="card-box card">
                <div class="p-20 m-b-20">
                    <form action="<?php echo base_url(); ?>perantau/saveDataPerantau" class="form-validation" method="POST">     
                <div class="row">
                <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Id<span class="text-danger">*</span></label>
                            <input type="number" name="nik" parsley-trigger="change" value="<?php echo $getIdAuto; ?>" required  class="form-control" onKeyPress="if(this.value.length==16) return false;" min="0" autocomplete="off" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">NIK / KTP<span class="text-danger">*</span></label>
                            <input type="number" name="no_ktp" parsley-trigger="change" required placeholder="Masukan 16 digit nomor ktp" class="form-control" onKeyPress="if(this.value.length==16) return false;" min="0" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Nama Lengkap<span class="text-danger">*</span></label>
                            <input type="text" name="nama_lengkap" parsley-trigger="change" required placeholder="Masukan nama lengkap" class="form-control" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Jenis Kelamin<span class="text-danger">*</span></label>
                            <select name="jenkel" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div>
                            <div class="input-group">
                                <input name="ttl" type="date" class="form-control" placeholder="bulan/tanggal/tahun">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Rt<span class="text-danger">*</span></label>
                        <input type="number" name="rt" parsley-trigger="change" required placeholder="RT" class="form-control" autocomplete="off">
                    </div>
                </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Rw<span class="text-danger">*</span></label>
                            <input type="number" name="rw" parsley-trigger="change" required placeholder="RW" class="form-control" autocomplete="off">
                        </div>
                    </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Dusun<span class="text-danger">*</span></label>
                            <input type="text" name="dusun" parsley-trigger="change" required placeholder="Dusun" class="form-control" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off">
                        </div>
                    </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kelurahan<span class="text-danger">*</span></label>
                            <input type="text" name="kelurahan" parsley-trigger="change" required value="Pujotirto" class="form-control" readonly>
                        </div>
                    </div>
            
                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kecamatan<span class="text-danger">*</span></label>
                            <input type="text" name="kecamatan" value="Karang Sambung" parsley-trigger="change" required  class="form-control" readonly>
                        </div>
                </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kabupaten<span class="text-danger">*</span></label>
                            <input type="text" name="kabupaten" value="Kebumen" parsley-trigger="change" required class="form-control" readonly>
                        </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Nomor Telf<span class="text-danger">*</span></label>
                        <input type="number" name="no_telf" parsley-trigger="change" required placeholder="Masukan 12 digit nomor telf" class="form-control" onKeyPress="if(this.value.length==12) return false;" min="0" autocomplete="off">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tanggal Pulang</label>
                        <div>
                            <div class="input-group">
                                <input name="tanggal_pulang" type="date" class="form-control" placeholder="bulan/tanggal/tahun">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3"  style="display: none;">
                    <div class="form-group">
                        <label>Start Karantina</label>
                        <div>
                            <div class="input-group">
                            <input class="form-control" type="text" name="start_karantina"  value=" <?php
                            echo date("d-M-Y");
                            ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3"  style="display: none;">
                    <div class="form-group">
                        <label>Finish Karantina</label>
                        <div>
                            <div class="input-group">
                            <input class="form-control" type="text" name="finish_karantina"  value="<?php
                    $date = date_create();
                            date_add($date, date_interval_create_from_date_string('14 days'));
                            echo date_format($date, "d-M-Y");
                            ?>"readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Kota Perantau<span class="text-danger">*</span></label>
                        <input type="text" name="kota_perantau" parsley-trigger="change" required placeholder="Kota perantau" class="form-control" autocomplete="off">
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="userName">Alasan Pulang<span class="text-danger"></span></label>
                        <textarea class="form-control" rows="5" name="keterangan" placeholder="Ketik alasannya disini.." autocomplete="off"></textarea>                    
                    </div>
                </div>

            </div>
                        
            <div class="form-group text-right m-b-0">
                <button class="btn btn-primary waves-effect waves-light" type="submit">
                    Simpan
                </button>
            </div>
                </form>
        </div>
    </div>

</div>
</div>
</div>
