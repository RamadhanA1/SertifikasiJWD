<main id="main" class="main">

    <div class="row">
        <!-- Index Halaman -->
        <div class="col-lg-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Produk Kami</h4>
                    <!-- <hr class="dropdown-divider"> -->
                    <hr>
                    <!-- <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p> -->

                    <ul class="sidebar-nav" id="sidebar-nav">

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#1">
                                <!-- <i class="bi bi-grid"></i> -->
                                <span>Produk dan Layanan Kami</span>
                            </a>
                        </li><!-- End Produk dan Layanan Kami Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#2">
                                <!-- <i class="bi bi-grid"></i> -->
                                <span>Kelebihan Kami</span>
                            </a>
                        </li><!-- End Kelebihan Kami Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#3">
                                <!-- <i class="bi bi-grid"></i> -->
                                <span>Mekanik Kami</span>
                            </a>
                        </li><!-- End Mekanik Kami Nav -->

                        <!-- <li class="nav-item">
                            <a class="nav-link collapsed" href="#4">
                                <i class="bi bi-grid"></i>
                                <span>Info Lebih Lanjut</span>
                            </a>
                        </li> -->
                         <!-- End Info Lebih Lanjut Nav -->

                    </ul>


                </div>
            </div>
        </div>

        <!-- Isi Halaman -->
        <div class="col-lg-10">

            <!-- Produk dan Layanan -->
            <div class="card" id="1">
                <div class="card-body">
                    <h5 class="card-title">Produk dan Layanan Kami</h5>
                    <!-- <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p> -->
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class=" d-flex justify-content-center my-3">
                                    <img src="<?= base_url(); ?>assets/img/star.png" class="card-img-top" alt="..." style="width: 5rem">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Penyewaan Kendaraan</h5>
                                    <p class="fs-6">Tersedia Puluhan Motor Antik yang siap jalan dan terawat dengan baik. Bisa digunakan juga untuk pameran!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class=" d-flex justify-content-center my-3">
                                    <img src="<?= base_url(); ?>assets/img/star.png" class="card-img-top" alt="..." style="width: 5rem">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Perbaikan Kendaraan</h5>
                                    <p class="card-text">Motor memiliki kendala? Silahkan datang ke kantor kami! Motor anda akan ditangani mekanik ahli!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class=" d-flex justify-content-center my-3">
                                    <img src="<?= base_url(); ?>assets/img/star.png" class="card-img-top" alt="..." style="width: 5rem">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Penjualan Sparepart</h5>
                                    <p class="card-text">Kesulitan mendapat suku cadang berkualitas untuk motor kesayangan anda? Pesankan pada kami, akan kami carikan sparepart berkualitas!</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- kelebihan -->
            <div class="card" id="2">
                <div class="card-body">
                    <h5 class="card-title">Kelebihan Kami</h5>
                    <h4 class="fw-bold mb-3">Apa saja keuntungan layanan dari kami?</h4>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row" class="mb-2 bg-success rounded d-flex justify-content-center align-items-center " style="color: white;">
                                    1
                                </th>
                                <td>Motor yang disewakan dalam keadaan terawat dan siap jalan</td>
                            </tr>
                            <tr>
                                <th scope="row" class="mb-2 bg-success rounded d-flex justify-content-center align-items-center " style="color: white;">
                                    2
                                </th>
                                <td>Sparepart yang kami jual berkualitas dan bergaransi</td>
                            </tr>
                            <tr>
                                <th scope="row" class="mb-2 bg-success rounded d-flex justify-content-center align-items-center " style="color: white;">
                                    3
                                </th>
                                <td>Telah melayani pesanan baik tingkat provinsi dan nasional</td>
                            </tr>
                            <tr>
                                <th scope="row" class="mb-2 bg-success rounded d-flex justify-content-center align-items-center " style="color: white;">
                                    4
                                </th>
                                <td>Perbaikan dan Perawatan Kendaraan oleh Mekanik Handal</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- mekanik Kami -->
            <div class="card" id="3">
                <div class="card-body">
                    <h4 class="card-title">Tim Mekanik Kami</h4>
                    <!-- <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p> -->
                    <div class="row row-cols-1 row-cols-md-5 g-4">
                        <div class="col">
                            <div class="">
                                <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                                    <img src="<?= base_url(); ?>assets/img/messages-3.jpg" alt="Profile" class="mb-2 rounded-circle" style="height:150px; width: 150px; object-fit:cover">
                                    <!-- <h5>Web Designer</h5> -->
                                    <h6>Hendri Agus, S.T.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                                    <img src="<?= base_url(); ?>assets/img/profile-img.jpg" alt="Profile" class="mb-2 rounded-circle" style="height:150px; width: 150px; object-fit:cover">
                                    <!-- <h5>Web Designer</h5> -->
                                    <h6>Arif Budianto, S.T.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                                    <img src="<?= base_url(); ?>assets/img/messages-3.jpg" alt="Profile" class="mb-2 rounded-circle" style="height:150px; width: 150px; object-fit:cover">
                                    <!-- <h5>Web Designer</h5> -->
                                    <h6>Saefuddin, S.T.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                                    <img src="<?= base_url(); ?>assets/img/profile-img.jpg" alt="Profile" class="mb-2 rounded-circle" style="height:150px; width: 150px; object-fit:cover">
                                    <!-- <h5>Web Designer</h5> -->
                                    <h6>Tirto Rahman, S.T.</h6>
                                </div>
                            </div>
                        </div>
                        



                    </div>
                </div>
            </div>

            

            
        </div>
    </div>


</main><!-- End #main -->