<section class="special-area bg-biru section_padding_15" id="about">
	<div class="special_description_area mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="special_description_img">
                        <div class="special_description_content">
	                        <h2 align="center">
                                <?php
                                    $status = $this->db->query('SELECT * FROM akun where id_akun = '.$this->session->userdata('id_akun').'')->result();
                                    foreach ($status as $st) {
                                        $sta = $st->status_pilih;
                                    }
                                        if ($sta==1) {
                                            echo "Terima Kasih,";
                                        }else{
                                            echo "Selamat Datang,";
                                        }
                                ?>
                                <?php
                                     $sql = $this->db->query('SELECT * FROM mahasiswa where nim = '.$this->session->userdata('nim').'');
                                     foreach ($sql->result() as $sql2) {
                                         echo $sql2->nama_lengkap;
                                    }
                                ?>        
                            </h2>
	                    </div>
                    </div>
                </div>
            </div>
            <?php
                $status = $this->db->query('SELECT * FROM akun where id_akun = '.$this->session->userdata('id_akun').'')->result();
                foreach ($status as $st) {
                    $sta = $st->status_pilih;
                }
                if ($sta==1) {
                ?>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="alert alert-success alert-dismissible">
                            <h3 align="center">Sudah menyempatkan waktu dan menentukan pilihanmu.</h3>
                        </div>
                        <div class="single-special">
                            <h3 align="center">Yuk ikutan photo competition dan menangkan voucher senilai 50K. Syarat dan Ketentuan follow <b>@pilkadiksipnj</b> on Instagram</h3>
                        </div>
                    </div>
                </div>
                <?php
                } else {
                    foreach ($main['sql']->result() as $sql) {
                        $id_calon = $sql->id_calon;
            ?>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="single-special">
                        <div class="row">
                            <div class="col-lg-1">
                                <h1>#<?php echo $sql->no_urut_calon;?></h1>
                            </div>
                            <div class="col-lg-4">
                                <img src="http://cntfrm.pilkadiksipnj.com/upload/calon/<?php echo $sql->foto_calon;?>" alt="Gakada gambar" class="img-thumbnail">
                                <?php
                                    $status = $this->db->query('SELECT * FROM akun where id_akun = '.$this->session->userdata('id_akun').'')->result();
                                    foreach ($status as $st) {
                                        if ($st->status_pilih==1) {   
                                ?>
                                    <button type="button" class="btn btn-danger right"><i class="fa fa-check-square-o"></i> Sudah memilih.</button><br>
                                <?php
                                        } else {
                                ?>
                                    <button type="button" class="btn btn-info right" data-toggle="modal" data-target="#exampleModal<?php echo $id_calon;?>"><i class="fa fa-hand-o-up"></i> Pilih</button><br>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                            <div class="col-lg-7">
                                <h3 align="center"><b><?php echo $sql->nama_calon;?></b></h3><br>
                                <div class="card card-body">
                                    <b>Visi :</b>
                                    <?php echo $sql->visi_calon;?><br><br>
                                    <b>Misi :</b>
                                    <?php echo $sql->misi_calon;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
            ?>

            <!-- Modal Konfirmasi -->
            <?php
                foreach ($main['sql']->result() as $sql) {
                            $id_calon = $sql->id_calon;
            ?>
                <div class="modal fade" id="exampleModal<?php echo $id_calon;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <?php echo form_open_multipart('home/create');?>
                        <input type="hidden" name="id_calon" value="<?php echo $id_calon;?>">
                        <?php
                            $test = $this->db->query('SELECT * FROM mahasiswa where nim = '.$this->session->userdata('nim').'');
                            foreach ($test->result() as $test2) {
                                $nl = $test2->nama_lengkap;
                                $em = $test2->email;
                                // echo $test2->nama_lengkap;
                            }
                        ?>
                        <input type="hidden" name="nama_lengkap" value="<?php echo $nl;?>">
                        <input type="hidden" name="email_to" value="<?php echo $em;?>">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Apakah Anda yakin memilih No. Urut <?php echo $sql->no_urut_calon;?>?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-info">Iya</button>
                          </div>
                        <?php echo form_close();?>
                    </div>
                  </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>