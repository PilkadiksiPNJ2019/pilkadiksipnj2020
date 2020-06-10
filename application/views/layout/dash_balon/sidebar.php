<?php
  $file_bayar = "";
  $status_bayar = "";
  $file_watermark = "";
  $file_balon = "";
  $link_wawancara = "";
  $nim = "";
	foreach ($berkas as $key => $value) {
		$file_bayar = $value->file_bayar;
		$status_bayar = $value->status_bayar;
		$file_watermark = $value->file_watermark;
		$file_balon = $value->file_balon;
		$link_wawancara = $value->link_wawancara;
	}
?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($this->uri->segment(1) == 'bakal_calon') { echo 'active open'; } ?>">
          <a href="<?php echo site_url("bakal_calon")?>">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
      <li class="header">WEB PILKADIKSI</li>
				<li class="<?php if($this->uri->segment(1) == 'berkas_balon') { echo 'active open'; } ?>">
          <a href="<?php echo site_url("berkas_balon")?>">
            <i class="fa fa-user" style="file"></i>
            <span>Berkas</span>
          </a>
        </li>
				<?php 
				if ($status_bayar==0) {
					
				}else{
					?>
					<li class="<?php if($this->uri->segment(1) == 'data_cm') { echo 'active open'; } ?>">
						<a href="<?php echo site_url("data_cm")?>">
							<i class="fa fa-user" style="file"></i>
							<span>Campaign Manager</span>
						</a>
					</li>
					<?php
				}
				?>
      <li class="header">SETTING</li>
				<li class="<?php if($this->uri->segment(1) == 'profile') { echo 'active open'; } ?>">
          <a href="<?php echo site_url("profile")?>">
            <i class="fa fa-user" style="file"></i>
            <span>Profile</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url("petunjuk_sk/logout")?>">
            <i class="fa fa-sign-out" style="file"></i>
            <span>Logout</span>
          </a>
        </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
