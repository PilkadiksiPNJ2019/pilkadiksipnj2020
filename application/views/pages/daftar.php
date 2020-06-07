<section class="special-area bg-biru section_padding_15" id="about">
	<div class="special_description_area mt-150">
        <div class="container">
            <div class="row">
            	<div class="col-lg-2"></div>
            	<div class="col-12 col-lg-8">
            		<div class="single-special">
                        <?php echo form_open_multipart('daftar/create');?>
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
                            <label class="col-lg-3">Tempat Lahir</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <label class="col-lg-3">Tanggal Lahir</label>
                            <div class="col-lg-9">
                                <input type="date" class="form-control" name="tanggal_lahir" required>
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
                            <label class="col-lg-3">Nomor Telepon</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" placeholder="Nomor Telepon" name="nomor_telepon" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <label class="col-lg-3">Email Aktif</label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" placeholder="Email Aktif" name="email" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <label class="col-lg-3">Alamat Rumah</label>
                            <div class="col-lg-9">
                                <textarea name="alamat_rumah" cols="30" rows="5" placeholder="Alamat Rumah (Sesuai KTP)" class="form-control" required></textarea>
                            </div>
                        </div><br>
                        <div class="row">
                            <label class="col-lg-3">Alamat Kost</label>
                            <div class="col-lg-9">
                                <textarea name="alamat_kost" cols="30" rows="5" placeholder="Alamat Kost ('-' jika tidak kost)" class="form-control" required></textarea>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9">
                                <a href="<?php echo site_url('.')?>" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-info">Daftar</button>
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