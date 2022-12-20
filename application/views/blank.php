<main id="main" class="main">

  <div class="row">
    <div class="col-lg-2">
      <div class="card">
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
      <div class="pagetitle">
        <h1>Blank Page</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>index.html">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Blank</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="col-lg-6">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Example Card</h5>
                <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Example Card</h5>
                <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>


</main><!-- End #main -->