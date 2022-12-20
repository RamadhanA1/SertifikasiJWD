<main id="main" class="main">

  <div class="row">
    <div class="col-lg-2">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Profile</h4>
          <!-- <hr class="dropdown-divider"> -->
          <hr>
          <!-- <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p> -->

          <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
              <a class="nav-link collapsed" href="#1">
                <!-- <i class="bi bi-grid"></i> -->
                <span>Tentang Kami</span>
              </a>
            </li><!-- End Tentang Kami Nav -->

            <li class="nav-item">
              <a class="nav-link collapsed" href="#2">
                <!-- <i class="bi bi-grid"></i> -->
                <span>Pengalaman</span>
              </a>
            </li><!-- End Pengalaman Nav -->

            <li class="nav-item">
              <a class="nav-link collapsed" href="#3">
                <!-- <i class="bi bi-grid"></i> -->
                <span>Kelebihan Kami</span>
              </a>
            </li><!-- End Kelebihan Kami Nav -->
          </ul>


        </div>
      </div>
    </div>
    <div class="col-lg-10">

      <div class="card" id="1">
        <div class="card-body">
          <h5 class="card-title">Tentang HSMC Jawa Barat </h5>
          <!-- <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p> -->
          <div class="clearfix">
            <img src="<?= base_url(); ?>assets/img/slides-3.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">

            <p>
              A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
            </p>

            <p>
              As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
            </p>

            <p>
              And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
            </p>
          </div>
        </div>
      </div>

      <div class="card" id="2">
        <div class="card-body">
          <h5 class="card-title">Pengalaman Kerja</h5>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Project</th>
                <th scope="col">Year</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Pengadaan Sparepart di Komunitas Retro Restorasi, Cimahi</td>
                <td>2022</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Penyewaan Kendaraan 12 Honda Supra pada acara IIMS, JIEXPO, Jakarta </td>
                <td>2022</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Pengadaan Sparepart di Komunitas Retro Restorasi, Cimahi</td>
                <td>2022</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Penyewaan Kendaraan 12 Honda Supra pada acara IIMS, JIEXPO, Jakarta </td>
                <td>2022</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>

      <div class="card" id="3">
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
              
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>


</main><!-- End #main -->