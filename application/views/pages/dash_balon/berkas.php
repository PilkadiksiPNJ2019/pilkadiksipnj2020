<?php
  $file_bayar = "";
  $status_bayar = "";
  $status_cm = "";
  $file_watermark = "";
  $file_balon = "";
  $link_wawancara = "";
  $nim = "";
	foreach ($berkas as $key => $value) {
		$file_bayar = $value->file_bayar;
		$status_bayar = $value->status_bayar;
		$status_cm = $value->status_cm;
		$file_watermark = $value->file_watermark;
		$file_balon = $value->file_balon;
		$link_wawancara = $value->link_wawancara;
	}
	foreach ($sql as $key => $value) {
		$nim = $value->nim;
	}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Lengkapi Berkas
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url("dashboard")?>"><i class="fa fa-home"></i> Dashboard</a></li>
      <li class="active">Berkas</li>
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
		<div class="box-body form-horizontal">
        <?php echo form_open_multipart('berkas_balon/update');?>
            <input type="hidden" name="cek_data" value="<?php echo count($berkas);?>">
            <input type="hidden" name="nim" value="<?php echo $nim;?>">
            <div class="form-group">
                <label class="col-sm-2 control-label">Bukti Pembayaran : </label>
                <div class="col-sm-4">
                    <?php
                    if (count($berkas)>0) {
                    ?>
                    <a href="<?php echo base_url();?>upload/calon/<?php echo $file_bayar;?>" data-toggle="lightbox" data-max-width="600">
                        <img src="<?php echo base_url();?>upload/calon/<?php echo $file_bayar;?>" class="img-thumbnail img-responsive">
                    </a>
                    <?php
                    }else{
                    ?>
										<label class="control-label text-danger">Belum melakukan pembayaran!</label>
										<input type="file" class="form-control" name="file_bayar">
                    <?php
                    }
                    ?>
                </div>
							</div>
							<?php 
								if ($status_bayar==0 && $status_cm==0 || $file_watermark=="") {
								}else if ($status_bayar==1 && $status_cm==0 || $file_watermark==""){
								}else if ($status_bayar==1 && $status_cm==1 || $file_watermark!=""){
							?>
							<div class="form-group">
												<label class="col-sm-2 control-label">File Berkas : </label>
												<div class="col-sm-10">
										<a href="<?php echo $file_watermark;?>" target="__BLANK" class="btn btn-primary btn-flat">Download</a>
												</div>
							</div>
							<div class="form-group">
												<label class="col-sm-2 control-label">Pengumpulan Berkas : </label>
												<div class="col-sm-10">
														<input type="text" class="form-control" name="file_balon" placeholder="Link Google Drive" value="<?php echo $file_balon;?>">
												</div>
										</div>
							<?php
								}
							?>
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
    </div>
          <!-- /.box -->
</section>
  <!-- /.content -->
