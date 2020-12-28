<?php
    include 'header.php';
    include 'navbar.php';

    $id = 1;
    $sql_gedung = "SELECT * FROM gedung";
    $rows_gedung = mysqli_query($conn, $sql_gedung);
    mysqli_close($conn);

?>

    <!--::industries start::-->
    <section class="hotel_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Gedung Mahasiswa</h2>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                    </div>
                </div>
            </div>
            <!-- Daftar Gedung  -->
            <div class="row">
                <?php foreach ($rows_gedung as $row) : ?>
                <div class="col-lg-4 col-sm-6 pt-3 pb-3">
                    <div class="single_ihotel_list">
                        <img src="img/ind/gedung_asrama.jpg" alt="">
                        <div class="hotel_text_iner">
                            <?php $a=$row['id_gedung'];$b=$row['nama'];echo "<h3> <a href='gedung/gedung_a.php?id_gedung=$a'>Gedung $b</a></h3>" ?>
                            <p><?= $row['penghuni']?></p>
                            <p>Kapasitas <?= $row['kapasitas']?> orang</p>
                            <p>From <span>Rp <?= $row['harga_termurah']?></span></p>
                        </div>
                    </div>
                </div>
                <?php endforeach;?> 
            </div>
        </div>
    </section>
    <!--::industries end::-->


<?php
    include 'footer.php';
?>
