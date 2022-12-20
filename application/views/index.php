<main id="main" class="main">

  <div class="row">
    <div class="col-lg-2 ">
      <div class="card ">
        <div class="card-body">
          <h4 class="card-title text-center">Homepage</h4>
          <!-- <hr class="dropdown-divider"> -->
          <hr>
          <!-- <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p> -->

          <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
              <a class="nav-link collapsed" href="#1">
                <!-- <i class="bi bi-grid"></i> -->
                <span>Front</span>
              </a>
            </li><!-- End Front Nav -->

            <li class="nav-item">
              <a class="nav-link collapsed" href="#2">
                <!-- <i class="bi bi-grid"></i> -->
                <span>Artikel Terbaru</span>
              </a>
            </li><!-- End Artikel Terbaru Nav -->

            <li class="nav-item">
              <a class="nav-link collapsed" href="#3">
                <!-- <i class="bi bi-grid"></i> -->
                <span>Kegiatan HSMC</span>
              </a>
            </li><!-- End Kegiatan HSMC Nav -->

            <li class="nav-item">
              <a class="nav-link collapsed" href="#4">
                <!-- <i class="bi bi-grid"></i> -->
                <span>Galeri Foto</span>
              </a>
            </li><!-- End Galeri Foto Nav -->

            <li class="nav-item">
              <a class="nav-link collapsed" href="#5">
                <!-- <i class="bi bi-grid"></i> -->
                <span>Klien dan Member</span>
              </a>
            </li><!-- End Klien dan Member Nav -->



            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <!-- <i class="bi bi-menu-button-wide"></i> -->
                <span>Login</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="components-alerts.html">
                    <i class="bi bi-circle"></i><span>Sign In</span>
                  </a>
                </li>
                <li>
                  <a href="components-alerts.html">
                    <i class="bi bi-circle"></i><span>Sign Up</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- End Login Nav -->
          </ul>


        </div>
      </div>
    </div>
    <div class="col-lg-10">
      <section class="section">
        <!-- Slides with captions -->
        <div id="carouselExampleCaptions" class="carousel slide pb-3 carousel-fade" data-bs-ride="carousel" id="1">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/slides-1.jpg" class="d-block w-100" alt="..." style="height: 300px; object-fit:cover">
              <div class="carousel-caption d-none d-md-block">
                <h3>HSMC Regional Jawa Barat</h3>
                <p>Komunitas Pecinta Motor Honda Supra Lintas Generasi.</p>
              </div>
            </div>
            <div class="carousel-item active">
              <img src="assets/img/slides-2.jpg" class="d-block w-100" alt="..." style="height: 300px; object-fit:cover">
              <div class="carousel-caption d-none d-md-block">
                <h3>Deal Sparepart!</h3>
                <p>Cari Kebutuhan Sparepart Supra Anda Disini!</p>
              </div>
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

          </div><!-- End Slides with captions -->
        </div>

        <div class="card mt-4" id="2">
          <div class="card-body">
            <h4 class="card-title">Artikel Terbaru</h4>
            <!-- <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p> -->
            <div class="row row-cols-1 row-cols-md-4 g-4">
              <div class="col">
                <div class="card ">
                  <img src="<?= base_url(); ?>assets/img/news-4.jpg" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h5 class="card-title ">Bakti Sosial NATARU 2022</h5>
                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  </div>
                  <a href="#" class="btn btn-primary card-footer">Selengkapnya</a>
                </div>
              </div>
              <div class="col">
                <div class="card ">
                  <img src="<?= base_url(); ?>assets/img/news-4.jpg" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h5 class="card-title ">Bakti Sosial NATARU 2022</h5>
                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  </div>
                  <a href="#" class="btn btn-primary card-footer">Selengkapnya</a>
                </div>
              </div>
              <div class="col">
                <div class="card ">
                  <img src="<?= base_url(); ?>assets/img/news-4.jpg" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h5 class="card-title ">Bakti Sosial NATARU 2022</h5>
                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  </div>
                  <a href="#" class="btn btn-primary card-footer">Selengkapnya</a>
                </div>
              </div>
              <div class="col">
                <div class="card ">
                  <img src="<?= base_url(); ?>assets/img/news-4.jpg" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h5 class="card-title ">Bakti Sosial NATARU 2022</h5>
                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  </div>
                  <a href="#" class="btn btn-primary card-footer">Selengkapnya</a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="card" id="3">
          <div class="card-body">
            <h4 class="card-title">Kegiatan HSMC</h4>
            <!-- <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p> -->
            <div class="row row-cols-1 row-cols-md-4 g-4">
              <div class="col">
                <div class="card ">
                  <img src="<?= base_url(); ?>assets/img/news-3.jpg" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h5 class="card-title ">Jambore Regional Jawa Barat</h5>
                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  </div>
                  <a href="#" class="btn btn-primary card-footer">Selengkapnya</a>
                </div>
              </div>
              <div class="col">
                <div class="card ">
                  <img src="<?= base_url(); ?>assets/img/news-3.jpg" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h5 class="card-title ">Jambore Regional Jawa Barat</h5>
                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  </div>
                  <a href="#" class="btn btn-primary card-footer">Selengkapnya</a>
                </div>
              </div>
              <div class="col">
                <div class="card ">
                  <img src="<?= base_url(); ?>assets/img/news-3.jpg" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h5 class="card-title ">Jambore Regional Jawa Barat</h5>
                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  </div>
                  <a href="#" class="btn btn-primary card-footer">Selengkapnya</a>
                </div>
              </div>
              <div class="col">
                <div class="card ">
                  <img src="<?= base_url(); ?>assets/img/news-3.jpg" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h5 class="card-title ">Jambore Regional Jawa Barat</h5>
                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  </div>
                  <a href="#" class="btn btn-primary card-footer">Selengkapnya</a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="card" id="4">
          <div class="card-body">
            <h4 class="card-title">Galeri Foto</h4>
            <div id="carouselExampleCaptions" class="carousel slide pb-3" data-bs-ride="carousel" id="4">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row row-cols-1 row-cols-md-5 g-4">
                    <div class="col">
                      <div class="">
                        <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                          <img src="assets/img/slides-1.jpg" alt="Profile" class="mb-2 rounded" style="height:120px; width: 180px; object-fit:cover">
                          <!-- <h5>Web Designer</h5> -->
                          <!-- <h6>Retro Restorasi</h6> -->
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="">
                        <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                          <img src="assets/img/slides-1.jpg" alt="Profile" class="mb-2 rounded" style="height:120px; width: 180px; object-fit:cover">
                          <!-- <h5>Web Designer</h5> -->
                          <!-- <h6>Retro Restorasi</h6> -->
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="">
                        <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                          <img src="assets/img/slides-1.jpg" alt="Profile" class="mb-2 rounded" style="height:120px; width: 180px; object-fit:cover">
                          <!-- <h5>Web Designer</h5> -->
                          <!-- <h6>Retro Restorasi</h6> -->
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="">
                        <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                          <img src="assets/img/slides-1.jpg" alt="Profile" class="mb-2 rounded" style="height:120px; width: 180px; object-fit:cover">
                          <!-- <h5>Web Designer</h5> -->
                          <!-- <h6>Retro Restorasi</h6> -->
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="">
                        <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                          <img src="assets/img/slides-1.jpg" alt="Profile" class="mb-2 rounded" style="height:120px; width: 180px; object-fit:cover">
                          <!-- <h5>Web Designer</h5> -->
                          <!-- <h6>Retro Restorasi</h6> -->
                        </div>
                      </div>
                    </div>


                  </div>

                </div>
                <div class="carousel-item">
                  <div class="row row-cols-1 row-cols-md-5 g-4">
                    <div class="col">
                      <div class="">
                        <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                          <img src="assets/img/slides-2.jpg" alt="Profile" class="mb-2 rounded" style="height:120px; width: 180px; object-fit:cover">
                          <!-- <h5>Web Designer</h5> -->
                          <!-- <h6>Retro Restorasi</h6> -->
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="">
                        <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                          <img src="assets/img/slides-2.jpg" alt="Profile" class="mb-2 rounded" style="height:120px; width: 180px; object-fit:cover">
                          <!-- <h5>Web Designer</h5> -->
                          <!-- <h6>Retro Restorasi</h6> -->
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="">
                        <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                          <img src="assets/img/slides-2.jpg" alt="Profile" class="mb-2 rounded" style="height:120px; width: 180px; object-fit:cover">
                          <!-- <h5>Web Designer</h5> -->
                          <!-- <h6>Retro Restorasi</h6> -->
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="">
                        <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                          <img src="assets/img/slides-2.jpg" alt="Profile" class="mb-2 rounded" style="height:120px; width: 180px; object-fit:cover">
                          <!-- <h5>Web Designer</h5> -->
                          <!-- <h6>Retro Restorasi</h6> -->
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="">
                        <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                          <img src="assets/img/slides-2.jpg" alt="Profile" class="mb-2 rounded" style="height:120px; width: 180px; object-fit:cover">
                          <!-- <h5>Web Designer</h5> -->
                          <!-- <h6>Retro Restorasi</h6> -->
                        </div>
                      </div>
                    </div>


                  </div>

                </div>
              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>

            </div>




          </div>
        </div>


        <div class="card" id="5">
          <div class="card-body">
            <h4 class="card-title">Klien dan Member</h4>
            <!-- <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p> -->
            <div class="row row-cols-1 row-cols-md-5 g-4">
              <div class="col">
                <div class="">
                  <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                    <img src="assets/img/messages-1.jpg" alt="Profile" class="mb-2 rounded" style="height:100px; width: 180px; object-fit:cover">
                    <!-- <h5>Web Designer</h5> -->
                    <h6>Retro Restorasi</h6>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="">
                  <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                    <img src="assets/img/messages-1.jpg" alt="Profile" class="mb-2 rounded" style="height:100px; width: 180px; object-fit:cover">
                    <!-- <h5>Web Designer</h5> -->
                    <h6>Retro Restorasi</h6>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="">
                  <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                    <img src="assets/img/messages-1.jpg" alt="Profile" class="mb-2 rounded" style="height:100px; width: 180px; object-fit:cover">
                    <!-- <h5>Web Designer</h5> -->
                    <h6>Retro Restorasi</h6>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="">
                  <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                    <img src="assets/img/messages-1.jpg" alt="Profile" class="mb-2 rounded" style="height:100px; width: 180px; object-fit:cover">
                    <!-- <h5>Web Designer</h5> -->
                    <h6>Retro Restorasi</h6>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="">
                  <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">

                    <img src="assets/img/messages-1.jpg" alt="Profile" class="mb-2 rounded" style="height:100px; width: 180px; object-fit:cover">
                    <!-- <h5>Web Designer</h5> -->
                    <h6>Retro Restorasi</h6>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>



      </section>
    </div>
  </div>


</main><!-- End #main -->