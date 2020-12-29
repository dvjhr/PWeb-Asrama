<?php 
    include 'header.php';
    include 'navbar.php';
    
?>

    <!-- booking part start-->
    <section class="booking_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <h2 class="section_tittle text-center">Cek Ketersesiaan</h2>
                </div>
                <div class="col-lg-12">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <form action="#" method="POST">
                                        <div class="form-row align-items-center">
                                            <div class="form_colum">
                                                <h5>Jenis Kelamin</h5>
                                                <select class="nc_select">
                                                    <option selected>Pilih</option>
                                                    <option value="1">Laki-laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form_colum">
                                            <h5>Tanggal Check-In</h5>
                                                <input id="datepicker_1" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <h5>Gedung</h5>
                                                <select name="id_gedung" class="nc_select" placeholder="Pilih">
                                                    <!-- <option selected>Pilih</option> -->
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                </select>
                                            </div>
                                            <div class="form_btn">
                                                <button class="btn_1" name="cek">Cek Ketersediaan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>                            
                        </div>
                    </div>
                <?php if (isset($_POST['cek'])) {
                   $id = $_POST['id_gedung'];
                   $sql_kamar = "SELECT * FROM kamar WHERE id_gedung = $id";
                   $rows_kamar = mysqli_query($conn, $sql_kamar);
                   $i = 0;
                   mysqli_close($conn); 
                ?>
                
                <div class="section-top-border">
                    <h3 class="mb-30">Daftar Kamar</h3>
                        <!-- Tabel Daftar Kamar -->
                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                <div class="table-head">
                                    <div class="serial">No</div>
                                    <div class="serial">Kamar</div>
                                    <div class="serial">Kapsasitas</div>
                                    <div class="serial">Status</div>
                                    <div class="serial"></div>
                                </div>
                                <!-- Isi tiap baris -->
                                <?php foreach ($rows_kamar as $row) : ?>
                                <div class="table-row">
                                    <!-- Nanti diisi php -->
                                    <div class="serial"><?= ++$i ?></div>
                                    <div class="serial"><?=  $row['nama'] ?></div>
                                    <div class="serial"><?=  $row['kapasitas'] ?> Orang</div>
                                    <div class="serial">Tersedia</div>
                                    <div class="serial"><a class="genric-btn primary" href="/pweb/pesan.php?id_kamar=<?php echo $row['id_kamar']?>">Pesan</a></div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>

                <?php }?>
                </div>
            </div>
        </div>
    </section>
    <!-- Header part end-->

<?php 
    include 'footer.php';
?>

