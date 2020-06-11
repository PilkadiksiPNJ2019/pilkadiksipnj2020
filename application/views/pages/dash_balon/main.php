<?php
	$file_bayar = "";
  $status_bayar = "";
  $status_cm = "";
  $file_watermark = "";
  $file_balon = "";
  $link_wawancara = "";
	foreach ($berkas as $key => $value) {
		$file_bayar = $value->file_bayar;
		$status_bayar = $value->status_bayar;
		$status_cm = $value->status_cm;
		$file_watermark = $value->file_watermark;
		$file_balon = $value->file_balon;
		$link_wawancara = $value->link_wawancara;
	}
	foreach ($sql as $key => $value) {
		$nama = $value->nama_lengkap;
	}
?>
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Selamat Datang, <?php echo $nama;?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('bakal_calon');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<h1 class="text-center">Timeline Pilkadiksi PNJ 2020</h1>
      <div class="row">
        <div class="col-md-12">
          <ul class="timeline">
            <li class="time-label">
              <span class="bg-red">
                8 - 17 Juni 2020
              </span>
            </li>
            <li>
              <i class="fa fa-user bg-blue"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-check text-success"></i></span>
                <h3 class="timeline-header"><a>Open Tender Calon Ketua Bidikmisi 2020</a></h3>
                <div class="timeline-body">
                  Bakal Calon mendaftarkan diri di laman web : <a href="http://pilkadiksi.formadiksipnj.com" target="__BLANK">http://pilkadiksi.formadiksipnj.com</a>
                </div>
              </div>
            </li>
            <li>
              <i class="fa fa-file-image-o bg-aqua"></i>
              <div class="timeline-item">
								<?php 
								if ($status_bayar==0) {
									?>
									<span class="time"><i class="fa fa-close text-danger"></i></span>
									<h3 class="timeline-header no-border"><a>Upload Bukti Pembayaran</a></h3>
									<div class="timeline-body">
										Agar dapat melakukan tahap selanjutnya, bakal calon harus melakukan pembayaran terlebih dahulu.
									</div>
									<div class="timeline-footer">
										<a href="<?php echo base_url('berkas_balon');?>" class="btn btn-info btn-flat btn-xs">Klik disini</a>
									</div>
									<?php
								}else{
									?>
									<span class="time"><i class="fa fa-check text-success"></i></span>
									<h3 class="timeline-header no-border"><a>Upload Bukti Pembayaran</a></h3>
									<div class="timeline-body">
										<b>Terima Kasih</b> telah melakukan pembayaran.
									</div>
									<?php
								}
								?>
							</div>
						</li>
						<?php 
						if ($status_cm==0 && $status_bayar==1) {
							?>
						<li>
              <i class="fa fa-user bg-maroon"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-close text-danger"></i></span>
                <h3 class="timeline-header"><a>Daftarkan Campaign Manager</a></h3>
                <div class="timeline-body">
                  Untuk dapat ke tahap selanjutnya, bakal calon wajib mendaftarkan campaign manager. Untuk mendaftarkan Campaign Manager bisa klik tombol dibawah atau melalui menu Campaign Manager.
                </div>
                <div class="timeline-footer">
                  <a href="<?php echo base_url('data_cm');?>" class="btn bg-maroon btn-flat btn-xs">Klik disini</a>
                </div>
              </div>
            </li>
							<?php
						}else if($status_cm==1 && $status_bayar==1){
							?>
            <li>
              <i class="fa fa-user bg-maroon"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-check text-success"></i></span>
                <h3 class="timeline-header"><a>Daftarkan Campaign Manager</a></h3>
                <div class="timeline-body">
                  <b>Terima Kasih</b> sudah mendaftarkan Campaign Manager.
                </div>
              </div>
            </li>
							<?php
						}
						?>
						<?php 
						if ($status_cm==1 && $status_bayar==1 && $file_balon=="") {
							?>
						<li>
              <i class="fa fa-file-pdf-o bg-yellow"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-close text-danger"></i></span>
                <h3 class="timeline-header"><a>Lengkapi Berkas</a></h3>
                <div class="timeline-body">
                  Untuk mengunduh dan mengunggah berkas bakal calon klik tombol dibawah atau bisa melalui menu berkas.
                </div>
                <div class="timeline-footer">
                  <a href="<?php echo base_url('berkas_balon');?>" class="btn btn-warning btn-flat btn-xs">Klik disini</a>
                </div>
              </div>
            </li>
							<?php
						}else if($status_cm==1 && $status_bayar==1 && $file_balon!=""){
							?>
            <li>
              <i class="fa fa-file-pdf-o bg-yellow"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-check text-success"></i></span>
                <h3 class="timeline-header"><a>Lengkapi Berkas</a></h3>
                <div class="timeline-body">
                  <b>Terima Kasih</b> sudah melengkapi berkas.
                </div>
              </div>
            </li>
							<?php
						}
						?>
            <li class="time-label">
              <span class="bg-green">
                18 Juni 2020
              </span>
            </li>
            <li>
              <i class="fa fa-file-pdf-o bg-purple"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-close text-danger"></i></span>
                <h3 class="timeline-header"><a>Verifikasi Berkas</a></h3>
                <div class="timeline-body">
                  Tim Panitia Pilkadiksi PNJ 2020 melakukan verifikasi berkas.
                </div>
              </div>
            </li>
            <li class="time-label">
              <span class="bg-blue">
              20 Juni 2020
              </span>
            </li>
            <li>
              <i class="fa fa-video-camera bg-teal"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-close text-danger"></i></span>
                <h3 class="timeline-header"><a>Wawancara</a></h3>
                <div class="timeline-body">
                  Bakal calon dan campaign manager wajib mengikuti wawancara pilkadiksi PNJ 2020, yang akan diadakan via online atau webinar. Link wawancara akan diinfokan melalui akun bakal calon dan campaign manager atau melalui email bakal calon dan campaign manager.
                </div>
              </div>
            </li>
            <li style="display: none;">
              <i class="fa fa-video-camera bg-purple"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-close text-danger"></i></span>
                <h3 class="timeline-header"><a>Pengumuman Calon Ketua</a></h3>
                <div class="timeline-body">
                  <b>Selamat Anda Lolos ke Tahap Selanjutnya, sebagai Calon Ketua Bidikmisi 2020/2021</b> dengan Nilai <b>80%</b>.
                </div>
              </div>
            </li>
            <li class="time-label">
              <span class="bg-navy">
              22 - 26 Juni 2020
              </span>
            </li>
            <li>
              <i class="fa fa-video-camera bg-black"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-close text-danger"></i></span>
                <h3 class="timeline-header"><a>Masa Kampanye</a></h3>
                <div class="timeline-body">
                  Bakal calon bersama Campaign Manager wajib mengikuti masa kampanye yang diadakan Tim Panitia Pilkadiksi PNJ 2020.
                </div>
              </div>
            </li>
            <li class="time-label">
              <span class="bg-orange">
              27 Juni 2020
              </span>
            </li>
            <li>
              <i class="fa fa-video-camera bg-blue"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-close text-danger"></i></span>
                <h3 class="timeline-header"><a>Eksplorasi Kandidat</a></h3>
                <div class="timeline-body">
                  Bakal calon bersama Campaign Manager wajib mengikuti eksplorasi kandidat yang diadakan Tim Panitia Pilkadiksi PNJ 2020.
                </div>
              </div>
            </li>
            <li class="time-label">
              <span class="bg-teal">
              28 - 30 Juni 2020
              </span>
            </li>
            <li>
              <i class="fa fa-clock-o bg-red"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-close text-danger"></i></span>
                <h3 class="timeline-header"><a>Masa Tenang</a></h3>
                <div class="timeline-body">
                  Masa tenang.
                </div>
              </div>
            </li>
            <li class="time-label">
              <span class="bg-maroon">
              1 - 3 Juli 2020
              </span>
            </li>
            <li>
              <i class="fa fa-hand-o-up bg-green"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-close text-danger"></i></span>
                <h3 class="timeline-header"><a>Pemilihan</a></h3>
                <div class="timeline-body">
                  Pemilihan Calon Ketua Bidikmisi 2020/2021.
                </div>
              </div>
            </li>
            <li style="display: none;">
              <i class="fa fa-video-camera bg-green"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-close text-danger"></i></span>
                <h3 class="timeline-header"><a>Pengumuman Ketua Bidikmisi 2020/2021</a></h3>
                <div class="timeline-body">
                  <b>Selamat Anda terpilih menjadi Ketua Bidikmisi 2020/2021</b> dengan perolehan suara <b>500 Suara</b>.
                </div>
              </div>
            </li>
            <li>
              <i class="fa fa-music bg-gray"></i>
            </li>
          </ul>
        </div>
      </div>
    </section>
