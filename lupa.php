<?php 

    include 'header.php';
    include 'navbar.php';    

?>

    <div class="container section_padding">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 col-md-8">
                <div class="mb-30 section-title text-center">
                    <h3 class="">Reset Sandi</h3>
                    <p>Reset kata sandi akun</p>
                </div>
                <form action="#">
                    <div class="mt-10">
                        <input type="text" name="nrp" placeholder="NRP"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'NRP'" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="email" placeholder="E Mail"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'E Mail'" required
                            class="single-input">
                    </div>
                    <div class="mt-30 row justify-content-center">
                        <a href="#" class="btn_1" type="submit">Reset Sandi</a>
                        <!-- <button class="btn_1">Submit</button> -->
                    </div>
                    <a class="mt-10 row justify-content-center" href="login.php">Sudah punya akun? Masuk</a>
                </form>
            </div>
        </div>
    </div>

<?php 

    include 'footer.php';

?>