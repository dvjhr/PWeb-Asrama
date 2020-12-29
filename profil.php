<?php 

    include 'header.php';
    include 'navbar.php';

    $akun = $_SESSION['nrp'];
    $sql_akun = "SELECT * FROM user where nrp = $akun";

    $rows_akun = mysqli_query($conn, $sql_akun);

    $i = 0;
    
?>

    <!-- tour details content css start-->
    <section class="tour_details_content section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="content_iner">
                        <h2 class="mb-40 text-center">Profil</h2>
                        <ul class="unordered-list">
                            <?php foreach ($rows_akun as $row) : ?>
                            <li class="list-biasa"><p>Nama: </p><h4><?=  $row['nama'] ?></h4></li>
                            <li class="list-biasa"><p>NRP: </p><h4><?=  $row['nrp'] ?></h4></li>
                            <li class="list-biasa"><p>Departemen: </p><h4><?=  $row['departemen'] ?></h4></li>
                            <li class="list-biasa"><p>No Telepon: </p><h4><?=  $row['no_telp'] ?></h4></li>
                            <li class="list-biasa"><p>E-Mail: </p><h4><?=  $row['email'] ?></h4></li>
                            <li class="list-biasa"><p>Kamar saat ini: </p><h4><?=  $row['id_kamar_tinggal'] ?></h4></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour details content css end-->

<?php 

    include 'footer.php';

?>