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
                                    <li class="nav-item"><a class="nav-link" href="#">Daftar</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li></li>
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
                                    <li class="nav-item"><a class="nav-link" href="#">Daftar</a></li></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li></li>
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
