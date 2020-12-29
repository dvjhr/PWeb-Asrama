<?php 
    include 'header.php';
    include 'navbar.php';
    
        $i = 1;
        $sql_transaksi = "SELECT transaksi.id_transaksi, transaksi.id_kamar, transaksi.id_user, kamar.nama as kamar, user.nama FROM `transaksi` left join kamar on transaksi.id_kamar=kamar.id_kamar left join user on transaksi.id_user=user.id_user";
        $rows_transaksi = mysqli_query($conn, $sql_transaksi);

        if (isset($_POST['submit'])) {
            $id_transaksi = $_POST['id_transaksi'];
            $id_kamar = $_POST['id_kamar'];
            $id_user = $_POST['id_user'];

            echo $id_kamar;
            echo $id_user;
            echo $id_transaksi;
            
            $sql_update_user = "UPDATE user SET user.id_kamar_tinggal = $id_kamar where user.id_user = $id_user";
            $rows_update = mysqli_query($conn, $sql_update_user);
            $sql_update_kamar = "UPDATE kamar SET kamar.kapasitas = kamar.kapasitas- 1 where kamar.id_kamar = $id_kamar";
            $rows_update = mysqli_query($conn, $sql_update_kamar);
            $sql_update_transaksi = "DELETE FROM transaksi WHERE id_transaksi = $id_transaksi";
            $rows_update = mysqli_query($conn, $sql_update_transaksi);

            header('Location:transaksi.php');
        }
    
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
                                <form action="" method="POST">
                                    <input type="text" name="id_transaksi" value="<?= $row['id_transaksi'] ?>" style="display:none">
                                    <input type="text" name="id_user" value="<?= $row['id_user'] ?>" style="display:none">
                                    <input type="text" name="id_kamar" value="<?= $row['id_kamar'] ?>" style="display:none">
                                    <div class="serial"><button class="genric-btn primary" name="submit" type="submit">Proses</a></div>
                                </form>
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

