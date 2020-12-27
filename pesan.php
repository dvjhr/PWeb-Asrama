<?php 

    include 'header.php';
    include 'navbar.php';

    $akun = $_SESSION['nrp'];
    $kamar = $_GET['id_kamar'];
    $sql_akun = "SELECT * FROM user where nrp = $akun";
    $sql_kamar = "SELECT id_kamar, kamar.nama AS nama_kamar, kapasitas, harga, gedung.nama AS nama_gedung FROM kamar LEFT JOIN gedung ON kamar.id_gedung=gedung.id_gedung WHERE id_kamar = $kamar";

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
                            <li class="list-biasa"> Nama: <?=  $row['nama'] ?></li>
                            <li class="list-biasa"> NRP: <?=  $row['nrp'] ?></li>
                            <li class="list-biasa"> Departemen: <?=  $row['departemen'] ?></li>
                            <?php endforeach;?>
                            
                            <?php foreach ($rows_kamar as $row) : ?>
                            <li class="list-biasa"> Kamar: <?=  $row['nama_kamar'] ?></li>
                            <li class="list-biasa"> Gedung: <?=  $row['nama_gedung'] ?></li>
                            <li class="list-biasa"> Kapasitas: <?=  $row['kapasitas'] ?> orang</li>
                            <li class="list-biasa"> Harga: Rp <?=  $row['harga'] ?></li>
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