<header class="header_area animated">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-lg-12">
                <div class="menu_area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand text-white" href="<?php echo site_url('.');?>">Pilkadiksi PNJ</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="ca-navbar">
                            <?php
                                if ($main['main']=='main') {
                            ?>
                                <ul class="navbar-nav ml-auto" id="nav">
									<li class="nav-item"><a class="nav-link" href="#timeline">Timeline</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="#petunjuk">Petunjuk</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="#syarat">Syarat dan Ketentuan</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('main');?>">Sistem E-vote</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('daftar_balon');?>">Daftar</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#Mylogin">Login</a></li></li>
                                    <!-- <li class="nav-item"><a class="nav-link" href="<?php echo site_url('pilkadiksi');?>">Belum tahu Pilkadiksi?</a></li> -->
                                </ul>
                            <?php
                                } else if ($main['main']=='home') {
                            ?>
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('main/logout');?>">Logout</a></li>
                                </ul>
                            <?php
                                } else if ($main['main']=='evote') {
							?>
								<ul class="navbar-nav ml-auto" id="nav">
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('.');?>">Timeline</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('.');?>">Petunjuk</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('.');?>">Syarat dan Ketentuan</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('main');?>">Sistem E-vote</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('daftar_balon');?>">Daftar</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#Mylogin">Login</a></li></li>
                                </ul>
							<?php
								}
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Modal Login -->
<div class="modal fade" id="Mylogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-white" style="background-color: #28B6FF;">
    <?php echo form_open_multipart('bakal_calon/login/');?>
      <div class="modal-header">
        <h5 class="modal-title text-white">Login</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form>
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="staticEmail" placeholder="Username">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword" placeholder="Password">
					</div>
				</div>
			</form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success">Login</button>
      </div>
    <?php echo form_close();?>
    </div>
  </div>
</div>
