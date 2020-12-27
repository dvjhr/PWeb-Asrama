
    <!--::header part start::-->
    <header class="main_menu">
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="/pweb/index.php"> <img src="/pweb/img/logo.png" alt="logo" style="max-width:150px"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pweb/index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pweb/gedung.php">Gedung</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pweb/fasilitas.php">Fasilitas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pweb/about.html">About</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/pweb/blog.html" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/pweb/blog.html">Blog</a>
                                            <a class="dropdown-item" href="/pweb/single-blog.html">Single blog</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/pweb/blog.html" id="navbarDropdown_1"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            pages
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                            <a class="dropdown-item" href="/pweb/top_place.html">top place</a>
                                            <a class="dropdown-item" href="/pweb/tour_details.html">tour details</a>
                                            <a class="dropdown-item" href="/pweb/elements.html">Elements</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tombol_navbar_kanan" class="header-btn d-none f-right d-lg-block">
                                <?php if($_SESSION) : ?>
                                        <a href="profil.php"><?php echo $_SESSION['nrp']; ?></a>
                                        <a href="/pweb/logout.php" class="btn_1">Logout</a>
                                <?php else : ?>
                                        <a href="/pweb/login.php" class="btn_1">Masuk</a>
                                        <a href="/pweb/daftar.php" class="btn_1">Daftar</a>
                                <?php endif ; ?>  
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->