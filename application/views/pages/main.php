<section class="special-area bg-biru section_padding_20" id="about">
	<div class="special_description_area mt-150">
        <div class="container">
            <?php echo $this->session->flashdata('notif_daftar')?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="special_description_img">
                        <div class="special_description_content">
	                        <h2>Selamat Datang di E-Vote Pilkadiksi!</h2>
	                        <p>E-Vote adalah sistem pemungutan suara secara elektronik yang dilakukan secara online yang dapat memudahkan pemilih dalam melakukan pemilihan dan dapat mempercepat proses perhitungan suara.</p>
	                    </div>
                    </div>
                    <div class="single-special">
                    	<h6>Belum tahu E-Vote?</h6>
                    	<p>Ayo ikuti langkah - langkah penggunaannya. <a href="<?php echo site_url('evote');?>" style="color:#000;">Klik disini.</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="single-special">
                    	<?php echo form_open_multipart('main/login');?>
	                    	<div class="row">
	                    		<div class="col-lg-12">
                                    <?php echo $this->session->flashdata('notif_login')?>
	                    			<input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" name="username" required>	
	                    		</div>
	                    	</div><br>
	                    	<div class="row">
	                    		<div class="col-8 col-lg-9">
	                    			<input type="password" class="form-control" placeholder="Password" name="password" required>
	                    		</div>
	                    		<div class="col-4 col-lg-3">
	                    			<button type="submit" name="login" class="btn btn-info">Login</button>
	                    		</div>
	                    	</div>
                    	<?php echo form_close();?>
                    </div>
                    <div class="single-special">
                        <?php echo form_open_multipart('main/cek_akun');?>
                        	<h6>Sudah terdaftarkah Kamu?</h6>
                        	<p>Cek data kamu sebelum login, Apakah kamu sudah terdaftar atau belum.</p><br>
                            <?php echo $this->session->flashdata('notif')?>
                        	<div class="row">
                        		<div class="col-8 col-lg-9">
                        			<input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim" required>
                        		</div>
                        		<div class="col-4 col-lg-3">
                        			<button type="submit" class="btn btn-info">Cek</button>
                        		</div>
                        	</div><br>
                            <p>Sudah terdaftar tapi belum dapat username dan password? Harap periksa email atau hubungi panitia pilkadiksi pnj 2020.</p>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
