<?php 
    // echo 'Directory of the current calling script: ' . __DIR__;
    // echo '<br/>';
    // echo 'Current working directory: ' . getcwd();
    // echo '<br />';
    // echo 'Changing current working directory to dir2';
    chdir('..');
    // echo '<br />';
    // echo 'Directory of the current calling script: ' . __DIR__; 
    // echo '<br />';
    // echo 'Current working directory: ' . getcwd();

    include 'header.php';
    include 'navbar.php';

    $id = $_GET['id_gedung'];
    $sql_gedung = "SELECT * FROM gedung LEFT JOIN fasilitas ON gedung.fasilitas = fasilitas.id_fasilitas WHERE id_gedung = $id";
    $sql_kamar = "SELECT * FROM kamar WHERE id_gedung = $id";

    $rows_gedung = mysqli_query($conn, $sql_gedung);
    $rows_kamar = mysqli_query($conn, $sql_kamar);
    $i = 0;
    mysqli_close($conn);

?>

    <!-- breadcrumb start-->
    <!-- <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h3>Gedung A</h3>
                            <p>Asrama ITS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- breadcrumb start-->

    <!-- about us css start-->
    <section class="about_us section_padding">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <!-- Foto Utama Gedung -->
                    <div class="about_img">
                        <img src="/pweb/img/ind/gedung_asrama2.jpg" alt="#">
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- List Fasilitas -->
                    <div class="about_text">
                        <?php foreach ($rows_gedung as $row) : ?>
                        <h2>Gedung <?=  $row['nama'] ?></h2>
                        <h4>untuk <?=  $row['penghuni'] ?></h4>
                        <ul class="unordered-list">
                            <!-- <li class="list-biasa">
                                <h5>Penghuni: </h5>
                                <p>Mahasiswi (Perempuan)</p>
                            </li> -->
                            <li class="list-biasa">
                                <h5>Jumlah Lantai: </h5>
                                <p><?=  $row['lantai'] ?></p>
                            </li>
                            <li class="list-biasa">
                                <h5>Jenis Kamar: </h5>
                                <ul class="unordered-list">
                                    <li>
                                        <p>2 Tempat tidur ukuran 3x3 m</p>
                                    </li>
                                    <li>
                                        <p>2 Tempat tidur ukuran 3x3,5 m</p>
                                    </li>
                                    <li>
                                        <p>4 Tempat tidur ukuran 6x3,5 m</p>
                                    </li>
                                    <li>
                                        <p>4 Tempat tidur ukuran 6x4 m</p>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-biasa">
                                <h5>Fasilitas: </h5>
                                <ul class="unordered-list">
                                    <li><p>Ranjang tingkat 2</p></li>
                                    <li><p>Meja belajar dan lemari</p></li>
                                    <li><p><?=  $row['jenis'] ?></p></li>
                                    <li><p>Wifi di ruang bersama</p></li>
                                </ul>
                            </li>
                        </ul>
                    <?php endforeach;?>
                    </div>
                </div>
            </div>
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
						<div class="table-row">
							<div class="serial">2</div>
							<div class="serial">A-102</div>
							<div class="serial">4 Orang</div>
							<div class="serial">Tersedia</div>
							<div class="serial"><p class="genric-btn disable">Penuh</p></div>
						</div>
					</div>
                </div>
			</div>
        </div>
    </section>
    <!-- about us css end-->

<?php 

    include 'footer.php';

?>