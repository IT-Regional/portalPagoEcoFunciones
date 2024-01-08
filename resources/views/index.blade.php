@include('template')
<!-- ======== sidebar-nav start =========== -->
  @include('nav') 
  <div class="overlay"></div>
      <!-- ======== main-wrapper start =========== -->
      <main class="main-wrapper">

      <!-- ========== header start ========== -->
      @include('header')
      <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        <section class="section">
          <br>
          <div class="card-style text-center"
            style="background-image: url('{{ asset('images/banner.png') }}'); background-repeat: no-repeat; background-size: cover; height:500px;">
            <div class="error-box" style="margin-top: 20%;">
              <h1 class="fw-700 mb-15 text-white">ECO Networks</h1>
              <h6 class="mb-10 text-white">El interner más rapido de todo El Salvador</h6>
            </div>
          </div>
          <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="title">
                    <h2>Tus Estadisticas</h2>
                  </div>
                </div>
                <!-- end col -->
                <!-- end col -->
              </div>
              <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                  <div class="icon purple" style="color: black">
                    <br>
                    {{-- <i class="lni lni-cart-full"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
  <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
</svg>
                  </div>
                  <div class="content">
                    <h6 class="mb-10">Facturas Pagadas</h6>
                    <h3 class="text-bold mb-10">3</h3>
                  </div>
                </div>
                <!-- End Icon Cart -->
              </div>
              <!-- End Col -->
              <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                  <div class="icon success" style="color: black;">
                    {{-- <i class="lni lni-dollar"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-x" viewBox="0 0 16 16">
  <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z"/>
  <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
  <path d="M8 8.293 6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708z"/>
</svg>
                  </div>
                  <div class="content">
                    <h6 class="mb-10">Facturas Pendientes</h6>
                    <h3 class="text-bold mb-10">1</h3>
                  </div>
                </div>
                <!-- End Icon Cart -->
              </div>
              <!-- End Col -->
              <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                  <div class="icon primary" style="color: black;">
                    <i class="lni lni-dollar"></i>
                  </div>
                  <div class="content">
                    <h6 class="mb-10">Balance Total</h6>
                    <h3 class="text-bold mb-10">$2,000</h3>
                  </div>
                </div>
                <!-- End Icon Cart -->
              </div>
              <!-- End Col -->
              <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                  <div class="icon orange" style="color: black;">
                    {{-- <i class="lni lni-user"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
  <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
  <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
</svg>
                  </div>
                  <div class="content">
                    <h6 class="mb-10">Servicios Contratados</h6>
                    <h3 class="text-bold mb-10">2</h3>
                  </div>
                </div>
                <!-- End Icon Cart -->
              </div>
              <!-- End Col -->
            </div>
          </div>
          <!-- end container -->
        </section>
        <!-- ========== section end ========== -->

        
        <!-- ========== footer start =========== -->
        @include('footer')
        <!-- ========== footer end =========== -->
      </main>

