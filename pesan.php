<?php 

    include 'header.php';
    include 'navbar.php';

    $akun = $_SESSION['nrp'];
    $kamar = $_GET['id_kamar'];
    $sql_akun = "SELECT * FROM user where nrp = $akun";
    $sql_kamar = "SELECT id_kamar, kamar.nama AS nama_kamar, kamar.kapasitas, harga, gedung.nama AS nama_gedung FROM kamar LEFT JOIN gedung ON kamar.id_gedung=gedung.id_gedung WHERE id_kamar = $kamar";

    $rows_akun = mysqli_query($conn, $sql_akun);
    $rows_kamar = mysqli_query($conn, $sql_kamar);
    
    $i = 0;
    mysqli_close($conn);
    
?>

    <!-- tour details content css start-->
    <section class="tour_details_content section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="content_iner">
                        <h2 class="mb-20">Detail Pemesanan</h2>
                        <ul class="unordered-list">
                            <?php foreach ($rows_akun as $row) : ?>
                            <li class="list-biasa"> Nama: <h4><?=  $row['nama'] ?></h4></li>
                            <li class="list-biasa"> NRP: <h4><?=  $row['nrp'] ?></h4></li>
                            <li class="list-biasa"> Departemen: <h4><?=  $row['departemen'] ?></h4></li>
                            <?php endforeach;?>
                            
                            <?php foreach ($rows_kamar as $row) : ?>
                            <li class="list-biasa"> Kamar: <h4><?=  $row['nama_kamar'] ?></h4></li>
                            <li class="list-biasa"> Gedung: <h4><?=  $row['nama_gedung'] ?></h4></li>
                            <li class="list-biasa"> Kapasitas: <h4><?=  $row['kapasitas'] ?></h4> orang</li>
                            <li class="list-biasa"> Harga: <h4>Rp <?=  $row['harga'] ?></h4></li>
                            <?php endforeach;?>
                            
                        </ul>
                        <div class="tour_details_content_btn">
                            <button href="#" class="btn_1">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour details content css end-->

<?php 

    include 'footer.php';

?>