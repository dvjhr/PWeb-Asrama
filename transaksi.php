<?php 
    include 'header.php';
    include 'navbar.php';
    
        $i = 1;
        $sql_transaksi = "SELECT id_transaksi, kamar.nama as kamar, user.nama FROM `transaksi` left join kamar on transaksi.id_kamar=kamar.id_kamar left join user on transaksi.id_user=user.id_user";
        $rows_transaksi = mysqli_query($conn, $sql_transaksi);
    
?>

    <!-- booking part start-->
    <section class="booking_part section_padding">
        <div class="container">
            <div class="section-top-border">
                <h3 class="mb-30">Daftar Permintaan Transaksi</h3>
                    <!-- Tabel Daftar Kamar -->
                    <div class="progress-table-wrap">
                        <div class="progress-table">
                            <div class="table-head">
                                <div class="serial">No</div>
                                <div class="serial">ID Transaksi</div>
                                <div class="serial">Kamar</div>
                                <div class="serial">Nama</div>
                                <div class="serial">Status</div>
                            </div>
                            <!-- Isi tiap baris -->
                            <?php foreach ($rows_transaksi as $row) : ?>
                            <div class="table-row">
                                <!-- Nanti diisi php -->
                                <div class="serial"><?= $i++ ?></div>
                                <div class="serial"><?=  $row['id_transaksi'] ?></div>
                                <div class="serial"><?=  $row['kamar'] ?></div>
                                <div class="serial"><?=  $row['nama'] ?></div>
                                <div class="serial"><button class="genric-btn primary" name="submit">Proses</a></div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header part end-->

<?php 
    include 'footer.php';
?>

