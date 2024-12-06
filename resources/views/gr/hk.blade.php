@extends ('grlayout')

@section('konten')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container">
        <h1>House Keeping's Golden Rule</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="current">House Keeping's Golden Rule</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 sticky-div" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="#room">Room</a>
              <a href="#publicArea">Public Area</a>
              <a href="#linenUniform">Linen & Uniform</a>
              <a href="#inhouseLaundry">Inhouse Laundry</a>
              <a href="#poolAttendant">Pool Attendant</a>
            </div>
          
            <!-- <h4>Judul</h4> -->
            <!-- <p>Isi</p> -->
          </div>
          


          <!-- Isi content disini -->
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <!-- <img src="assets/img/services.jpg" alt="" class="img-fluid services-img"> -->

            <!-- Section 1 -->
            <section id="room">
            <h3>Room</h3>
            <p>
              <iframe src="https://drive.google.com/file/d/1IW4oiIj-3naJ-NR8W4NG1NLtvToYymfT/preview" width="640" height="480" allow="autoplay"></iframe>  
            </p>
            </section>
            <!-- Section 1 -->
          
            <!-- Section 2 -->
            <section id="publicArea">
            <h3>Public Area</h3>
            <p>
              <iframe src="https://drive.google.com/file/d/16CpG_t68ZZ2bIAwo-u3vQRpgbo9jkdPe/preview" width="640" height="480" allow="autoplay"></iframe>
            </p>
            </section>
            <!-- Section 2 -->

            <!-- Section 3 -->
            <section id="linenUniform">
              <h3>Linen & Uniform</h3>
              <p>
                <iframe src="https://drive.google.com/file/d/1OvlYFpvvWVirEvKrnInkPE_moZ_PUq8-/preview" width="640" height="480" allow="autoplay"></iframe>
              </p>
            </section>
            <!-- Section 3 -->

                      <!-- Section 4 -->
                      <section id="inhouseLaundry">
                        <h3>⁠Inhouse Laundry</h3>
                        <p>
                          <iframe src="https://drive.google.com/file/d/1fqp3kh6hnboj2p-b2kMkem6PTUxwN5z-/preview" width="640" height="480" allow="autoplay"></iframe>
                        </p>
                      </section>
                      <!-- Section 4 -->

                      <!-- Section 5 -->
                      <section id="poolAttendant">
                        <h3>Pool Attendant</h3>
                        <p>
                          <iframe src="https://drive.google.com/file/d/1fqp3kh6hnboj2p-b2kMkem6PTUxwN5z-/preview" width="640" height="480" allow="autoplay"></iframe>
                        </p>
                      </section>
                      <!-- Section 5 -->



       
          </div>
          <!-- Akhir konten disini -->
        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

  
@endsection