<?php 

    include 'header.php';
    include 'navbar.php';
    
    //fungsi daftar
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $sandi = $_POST['sandi'];
        $nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $departemen = $_POST['departemen'];
        $no_telp = $_POST['no_telp'];
        $jenis_kelamin = $_POST['jenis_kelamin'];

        //hashing password
        $sandi = password_hash($sandi, PASSWORD_DEFAULT); 

        //query insert into database
        $query = "SELECT * FROM user WHERE `nrp` = '$nrp'";
        $check_user = mysqli_query($conn, $query);
        
        $row_found = mysqli_num_rows($check_user);
        
        if ($row_found) {
            echo 'NRP sudah ada lur!';
            } 
        else {
            //query insert into database
            $query = 
            "INSERT INTO `user`(`nrp`, `email`, `sandi`, `nama`, `departemen`, `no_telp`, `jkelamin`) VALUES (
            '$nrp',
            '$email',
            '$sandi',
            '$nama',
            '$departemen',
            '$no_telp',
            '$jenis_kelamin')";
            $insert_user = mysqli_query($conn, $query);

            //echo 'masuk lur';
            }
        

    ?>

        <h5>Masuk Lur!</h5>

    <?php     
    }
    

?>

    <div class="container section_padding">
        <!-- <a class="genric-btn primary" href="index/php">Kembali</a> -->
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 col-md-8">
                <div class="mb-30 section-title text-center">
                    <h3 class="">Daftar</h3>
                    <p>Daftar akun reservasi asrama</p>
                </div>
                <form action="#" method="POST">
                    <div class="mt-10">
                        <input type="email" name="email" placeholder="E Mail"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'E Mail'" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="password" name="sandi" placeholder="Kata Sandi"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sandi'" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="nrp" placeholder="NRP"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'NRP'" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="nama" placeholder="Nama Lengkap"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="departemen" placeholder="Departemen"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="no_telp" placeholder="No Telp"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Telp'" required
                            class="single-input">
                    </div>
                    <div class="jkelamin mt-10">
                        <div class="d-flex">
                            <input class="primary-radio d-flex" type="radio" name="jenis_kelamin" value="laki-laki">
                            <label for="confirm-radio"></label>
                            <p>Laki-laki</p>
                        </div>
                        <div class="d-flex">
                            <input class="primary-radio d-flex" type="radio" name="jenis_kelamin" value="perempuan">
                            <label for="confirm-radio"></label>
                            <p>Perempuan</p>
                        </div>
                    </div>
                    <div class="mt-30 row justify-content-center">
                        <!-- <a href="#" class="btn_1" type="submit">Daftar</a> -->
                        <button type="submit" name="submit" class="btn_1">Submit</button>
                    </div>
                    <a class="mt-10 row justify-content-center" href="login.php">Sudah punya akun? Masuk</a>
                    <a class="mt-10 row justify-content-center" href="lupa.php">Lupa kata sandi? Reset sandi</a>
                </form>
            </div>
        </div>
    </div>

<?php 

    include 'footer.php';

?>