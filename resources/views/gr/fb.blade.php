@extends('grlayout')

@section('konten')

<main class="main">

    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container">
        <h1>F&B Production Golden Rule</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="current">F&B Production Golden Rule</li>
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
              <a href="#F&B Production">F&B Production</a>
            </div>
          </div>

          <!-- Isi content disini -->
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <!-- <img src="../assets/img/services.jpg" alt="" class="img-fluid services-img"> -->

            <!-- Section 1 -->
            <section id="F&B Production">
              <h3>F&B Production</h3>
              <p>
                <iframe src="https://drive.google.com/file/d/1kcXEso2t11cI4YQNsaHy2DEMhaUf-pW6/preview" width="640"
                  height="480" allow="autoplay"></iframe>
              </p>
            </section>
            <!-- Section 1 -->
          </div>


          <!-- Akhir konten disini -->
        </div>
      </div>

    </section><!-- /Service Details Section -->

  </main>
@endsection