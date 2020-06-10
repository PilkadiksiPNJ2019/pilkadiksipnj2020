<?php 
	foreach ($sql as $key => $value) {
		$nama = $value->nama_lengkap;
	}
?>
<header class="main-header">

  <!-- Logo -->
  <a href="<?php echo site_url("dashboard")?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">
        <img src="<?php echo base_url();?>assets/dash_balon/images/logo_pilkadiksi.png">
    </span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">
        <!-- <img src="<?php echo base_url();?>assets/images/favicon.png"> -->
        Pil<b>Kadiksi 2020</b>
    </span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li>
          <a>
            <span class="hidden-xs"><b><?php echo $nama;?></b></span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>
