<?php 

    include 'header.php';
    include 'navbar.php';

    $akun = $_SESSION['nrp'];
    $id_user = $_SESSION['id_user'];
    $id_kamar = $_GET['id_kamar'];
    $sql_akun = "SELECT * FROM user where nrp = $akun";
    $sql_kamar = "SELECT id_kamar, kamar.nama AS nama_kamar, kamar.kapasitas, harga, gedung.nama AS nama_gedung, gedung.penghuni AS penghuni FROM kamar LEFT JOIN gedung ON kamar.id_gedung=gedung.id_gedung WHERE id_kamar = $id_kamar";

    $rows_akun = mysqli_query($conn, $sql_akun);
    $rows_kamar = mysqli_query($conn, $sql_kamar);

    foreach ($rows_akun as $akun_row) {
        $jkelamin = $akun_row['jkelamin'];
    }
    foreach ($rows_kamar as $kamar_row) {
        $id_kamar = $kamar_row['id_kamar'];
        $penghuni = $kamar_row['penghuni'];
    }
    $i = 0;

    if (isset($_POST['submit'])) {

        if ($jkelamin != $penghuni) {
            echo "Beda kelamin lur!";
        } else {
            $entry_sql = "INSERT INTO `transaksi` (`id_user`, `id_kamar`) VALUES (
            '$id_user',
            '$id_kamar')";
        $entry_db = mysqli_query($conn, $entry_sql);
        }
      
    }
    
?>

    <!-- tour details content css start-->
    <section class="tour_details_content section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="content_iner">
                        <h2 class="mb-40 text-center">Detail Pemesanan</h2>
                        <ul class="unordered-list">
                            <?php foreach ($rows_akun as $row) : ?>
                            <li class="list-biasa"><p>Nama: </p><h4><?=  $row['nama'] ?></h4></li>
                            <li class="list-biasa"><p>NRP: </p><h4><?=  $row['nrp'] ?></h4></li>
                            <li class="list-biasa"><p>Departemen: </p><h4><?=  $row['departemen'] ?></h4></li>
                            <?php endforeach;?>
                            
                            <?php foreach ($rows_kamar as $row) : ?>
                            <li class="list-biasa"><p>Kamar: </p><h4><?=  $row['nama_kamar'] ?></h4></li>
                            <li class="list-biasa"><p>Gedung: </p><h4><?=  $row['nama_gedung'] ?></h4></li>
                            <li class="list-biasa"><p>Kapasitas: </p><h4><?=  $row['kapasitas'] ?> orang</h4></li>
                            <li class="list-biasa"><p>Harga: </p><h4>Rp <?=  $row['harga'] ?></h4></li>
                            <?php endforeach;?>
                            
                        </ul>
                        <form action="#" method="POST">           
                            <div class="tour_details_content_btn">
                                <button href="#" name="submit" class="btn_1">Pesan Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour details content css end-->

<?php 

    include 'footer.php';

?>