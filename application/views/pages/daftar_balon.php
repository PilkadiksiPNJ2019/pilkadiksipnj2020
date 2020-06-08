<section class="special-area bg-biru section_padding_15" id="about">
	<div class="special_description_area mt-150">
        <div class="container">
            <div class="row">
            	<div class="col-lg-2"></div>
            	<div class="col-12 col-lg-8">
            		<div class="single-special text-white">
						<?php echo $this->session->flashdata('notif')?>
						<h3 class="text-center pb-5 text-white">Pendaftaran Open Tender Calon Ketua Bidikmisi 2020</h3>
                        <?php echo form_open_multipart('daftar_balon/create');?>
            			<div class="row">
                            <label class="col-lg-3">NIM</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim" required>    
                            </div>
                        </div><br>
                        <div class="row">
                            <label class="col-lg-3">Nama Lengkap</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" required>    
                            </div>
                        </div><br>
                        <div class="row">
                            <label class="col-lg-3">Jurusan</label>
                            <div class="col-lg-9">
                                <select name="jurusan" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="AN">Administrasi Niaga</option>
                                    <option value="AK">Akuntansi</option>
                                    <option value="BP">Bisnis Profesional</option>
                                    <option value="TE">Teknik Elektro</option>
                                    <option value="TGP">Teknik Grafika dan Penerbitan</option>
                                    <option value="TIK">Teknik Informatika dan Komputer</option>
                                    <option value="TM">Teknik Mesin</option>
                                    <option value="TS">Teknik Sipil</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <label class="col-lg-3">Program Studi</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Program Studi" name="prodi" required>    
                            </div>
                        </div><br>
                        <div class="row">
                            <label class="col-lg-3">Angkatan</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Angkatan (ex:2017)" name="angkatan" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <label class="col-lg-3">Jenis Kelamin</label>
                            <div class="col-lg-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Laki-laki">Laki - laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <label class="col-lg-3">Nomor Whatsapp</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" placeholder="Nomor Whatsapp" name="nomor_whatsapp" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <label class="col-lg-3">Email Aktif</label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" placeholder="Email Aktif" name="email" required>
                            </div>
						</div><br>
						<div class="row">
                            <label class="col-lg-3">Scan /  Foto KTM</label>
                            <div class="col-lg-9">
                                <input type="file" class="form-control" name="foto_ktm" required>
                            </div>
						</div><br>
						<div class="row">
                            <label class="col-lg-3">Scan /  Foto Halaman Pertama Buku Tabungan Bidikmisi</label>
                            <div class="col-lg-9">
                                <input type="file" class="form-control" name="foto_tabungan" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9">
                                <button type="submit" class="btn btn-success">Daftar</button>
                            </div>
                        </div><br>
                        <?php echo form_close();?>
            		</div>
            	</div>
            	<div class="col-lg-2"></div>
            </div>
        </div>
    </div>
</section>
