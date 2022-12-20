<main id="main" class="main">

    <div class="row">
        <div class="col-lg-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Kontak Kami</h4>
                    <!-- <hr class="dropdown-divider"> -->
                    <hr>
                    <!-- <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p> -->

                    <ul class="sidebar-nav" id="sidebar-nav">

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#1">
                                <!-- <i class="bi bi-grid"></i> -->
                                <span>Alamat</span>
                            </a>
                        </li><!-- End Alamat Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#2">
                                <!-- <i class="bi bi-grid"></i> -->
                                <span>Telepon</span>
                            </a>
                        </li><!-- End Telepon Terbaru Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#3">
                                <!-- <i class="bi bi-grid"></i> -->
                                <span>Email</span>
                            </a>
                        </li><!-- End Email Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#4">
                                <!-- <i class="bi bi-grid"></i> -->
                                <span>Jam Kerja</span>
                            </a>
                        </li><!-- End Jam Kerja Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#4">
                                <!-- <i class="bi bi-grid"></i> -->
                                <span>Kirim Pesan</span>
                            </a>
                        </li><!-- End Kirim Pesan Nav --> 
                    </ul>


                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <section class="section contact">
                <div class="row gy-4">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="info-box card"> <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>Jl. Patriot Raya, No.99,<br>Bandung, Jawa Barat</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info-box card"> <i class="bi bi-telephone"></i>
                                    <h3>Telepon</h3>
                                    <p>021-7918-7676<br>0892-1239-2391</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info-box card"> <i class="bi bi-envelope"></i>
                                    <h3>Email</h3>
                                    <p>hsmcjw_official@gmail.com<br>humas_hsmc3@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info-box card"> <i class="bi bi-clock"></i>
                                    <h3>Jam Kerja</h3>
                                    <p>Senin - Jumat<br>9:00 - 17:00 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card p-4">
                            <form action="forms/contact.php" method="post" class="php-email-form">
                                <div class="row gy-4">
                                    <div class="col-md-6"> <input type="text" name="name" class="form-control" placeholder="Nama Anda" required=""></div>
                                    <div class="col-md-6 "> <input type="email" class="form-control" name="email" placeholder="Email Anda" required=""></div>
                                    <div class="col-md-12"> <input type="text" class="form-control" name="subject" placeholder="Subjek" required=""></div>
                                    <div class="col-md-12"><textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea></div>
                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div> <button type="submit">Kirim Pesan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


</main><!-- End #main -->