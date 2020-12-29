<?php 

    include 'header.php';
    include 'navbar.php'; 
    
    //fungsi login
    if (isset($_POST['submit'])) {
        // $email = $_POST['email'];
        $sandi = $_POST['sandi'];
        $nrp = $_POST['nrp'];

        //hashing password
        // $sandi = password_hash($sandi, PASSWORD_DEFAULT); 

        //query cek login
        $query = "SELECT * FROM user WHERE `nrp` = '$nrp'";
        $check_user = mysqli_query($conn, $query);
        
        $row_found = mysqli_num_rows($check_user);
        
        if ($row_found) {
            while ($row = mysqli_fetch_assoc($check_user)) {
                $nrp = $row['nrp'];
                $id_user = $row['id_user'];
                $sandi_temp = $row['sandi'];
            }
            $cek = password_verify($sandi, $sandi_temp);
            if ($cek) {
                
                //session_start();
                $_SESSION['nrp'] = $nrp;
                $_SESSION['id_user'] = $id_user;
                print $row_found;
                echo 'Mashoook'.$_SESSION['nrp'];
                header('Location: index.php');
            } else {
                // $pesan = 'Password salah';

            }
        }

        //echo 'masuk lur';
    }

?>

    <div class="container section_padding">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 col-md-8">
                <div class="mb-30 section-title text-center">
                    <h3 class="">Masuk</h3>
                    <p>Masuk ke sistem reservasi asrama</p>
                </div>
                <form action="#" method="POST">
                    <div class="mt-10">
                        <input type="text" name="nrp" id="nrp" placeholder="NRP"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'NRP'" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="password" name="sandi" id="sandi" placeholder="Kata Sandi"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Sandi'" required
                            class="single-input">
                    </div>
                    <div class="mt-30 row justify-content-center">
                        <!-- <a href="#" class="btn_1" type="submit">Masuk</a> -->
                        <button type="submit" name="submit" class="btn_1" onclick="fungsi_login()">Masuk</button>
                    </div>
                    
                    <h4 id="gagal_login"></h4>
                    <a class="mt-10 row justify-content-center" href="daftar.php">Belum punya akun? Daftar</a>
                    <a class="mt-10 row justify-content-center" href="lupa.php">Lupa kata sandi? Reset sandi</a>
                </form>
            </div>
        </div>
    </div>

<?php 

    include 'footer.php';

?>