<?php
  $id= "";
  $nim = "";
  $nama_lengkap = "";
  $jurusan = "";
  $prodi = "";
  $angkatan = "";
  $jenis_kelamin = "";
  $nomor_whatsapp = "";
  $email = "";
  $foto_ktm = "";
  $foto_tabungan = "";
    foreach ($sql as $cms) {
      $id = $cms->id_balon;
      $nim = $cms->nim;
      $nama_lengkap = $cms->nama_lengkap;
      $jurusan = $cms->jurusan;
      $prodi = $cms->prodi;
      $angkatan = $cms->angkatan;
      $jenis_kelamin = $cms->jenis_kelamin;
      $nomor_whatsapp = $cms->nomor_whatsapp;
      $email = $cms->email;
      $foto_ktm = $cms->foto_ktm;
      $foto_tabungan = $cms->foto_tabungan;
	}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Profile Bakal Calon
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url("dashboard")?>"><i class="fa fa-home"></i> Dashboard</a></li>
      <li class="active">Profile Bakal Calon</li>
    </ol><br>
    <?php echo $this->session->flashdata('notif')?>
</section>

  <!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">

        </div>
        <!-- /.box-header -->
        <!-- form start -->
		<?php echo form_open_multipart('profile/update');?>
			<input type="hidden" name="cek_data" value="<?php echo count($sql);?>">
          <div class="box-body form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label">NIM</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim" value="<?php echo $nim;?>">    
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" value="<?php echo $nama_lengkap;?>">    
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Jurusan</label>
                <div class="col-sm-10">
                    <select name="jurusan" class="form-control">
                        <option value="">Select</option>
                        <option <?php if($jurusan=="AN"){echo 'selected';}?> value="AN">Administrasi Niaga</option>
                        <option <?php if($jurusan=="AK"){echo 'selected';}?> value="AK">Akuntansi</option>
                        <option <?php if($jurusan=="BP"){echo 'selected';}?> value="BP">Bisnis Profesional</option>
                        <option <?php if($jurusan=="TE"){echo 'selected';}?> value="TE">Teknik Elektro</option>
                        <option <?php if($jurusan=="TGP"){echo 'selected';}?> value="TGP">Teknik Grafika dan Penerbitan</option>
                        <option <?php if($jurusan=="TIK"){echo 'selected';}?> value="TIK">Teknik Informatika dan Komputer</option>
                        <option <?php if($jurusan=="TM"){echo 'selected';}?> value="TM">Teknik Mesin</option>
                        <option <?php if($jurusan=="TS"){echo 'selected';}?> value="TS">Teknik Sipil</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Program Studi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Program Studi" name="prodi" value="<?php echo $prodi;?>">    
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Angkatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Angkatan (ex:2017)" name="angkatan" value="<?php echo $angkatan;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">Select</option>
                        <option <?php if($jenis_kelamin=="Laki-laki"){echo 'selected';}?> value="Laki-laki">Laki - laki</option>
                        <option <?php if($jenis_kelamin=="Perempuan"){echo 'selected';}?> value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Nomor Whatsapp</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Nomor Whatsapp" name="nomor_whatsapp" value="<?php echo $nomor_whatsapp;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Email Aktif</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Email Aktif" name="email" value="<?php echo $email;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Scan / Foto KTM</label>
                <div class="col-sm-4">
					<?php
					if ($foto_ktm=="") {
					?>
					<input type="file" class="form-control" name="foto_ktm">
					<?php
					}else{
					?>
					<a href="<?php echo base_url();?>upload/calon/<?php echo $foto_ktm;?>" data-toggle="lightbox" data-max-width="600">
                        <img src="<?php echo base_url();?>upload/calon/<?php echo $foto_ktm;?>" class="img-thumbnail img-responsive">
                    </a>
					<?php
					}
					?>
                </div>
                <label class="col-sm-2 control-label">Scan / Foto Tabungan</label>
                <div class="col-sm-4">
					<?php
					if ($foto_tabungan=="") {
					?>
					<input type="file" class="form-control" name="foto_tabungan">
					<?php
					}else{
					?>
					<a href="<?php echo base_url();?>upload/calon/<?php echo $foto_tabungan;?>" data-toggle="lightbox" data-max-width="600">
                        <img src="<?php echo base_url();?>upload/calon/<?php echo $foto_tabungan;?>" class="img-thumbnail img-responsive">
                    </a>
					<?php
					}
					?>
                </div>
            </div>
            <hr>
            <div class="form-group">
              <div class="col-sm-2 control-label"></div>
              <div class="col-sm-10">
                <a href="<?php echo site_url('bakal_calon')?>"class="btn btn-default btn-flat">Kembali</a>
                <button type="submit" class="btn btn-success btn-flat">Submit</button>
              </div>
            </div>
        <?php echo form_close();?>
          </div>
          <!-- /.box-body -->
        </form>
    </div>
          <!-- /.box -->
</section>
  <!-- /.content -->
