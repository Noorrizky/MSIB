@extends('grlayout')

@section('konten')
<main class="main">

    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container">
        <h1>FINANCE LEADER Golden Rule</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="current">Finance's & IT's Golden Rule</li>
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
              <a href="#FINANCIAL CONTROLLER">FINANCIAL CONTROLLER</a>
              <a href="#PAYMASTER">PAYMASTER</a>
              <a href="#ACCOUNTANT">ACCOUNTANT</a>
            </div>

            <!-- <h4>Judul</h4> -->
            <!-- <p>Isi</p> -->
          </div>

          <!-- Isi content disini -->
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <!-- <img src="assets/img/services.jpg" alt="" class="img-fluid services-img"> -->

            <!-- Section 1 -->
            <section id="FINANCIAL CONTROLLER">
              <h3>FINANCIAL CONTROLLER Golden Rules</h3>
              <p>
                <iframe src="https://drive.google.com/file/d/1Y6nP_cFv-A0U70IO15s4ojYx1bSC8EPb/preview" width="640"
                  height="480" allow="autoplay"></iframe>
              </p>
            </section>
            <!-- Section 1 -->

            <!-- Section 2 -->
            <section id="PAYMASTER">
              <h3>PAYMASTER Golden Rules</h3>
              <p>
                <iframe
                  src="https://drive.google.com/file/d/0B7XXbrkMHRcubXM1MVpPZmQ5dlk/preview?resourcekey=0-BPVik3216s0g8SNR34KzIw"
                  width="640" height="480" allow="autoplay"></iframe>
              </p>
            </section>
            <!-- Section 2 -->

            <!-- Section 3 -->
            <section id="ACCOUNTANT">
              <h3>ACCOUNTANT Golden Rules</h3>
              <p>
                <iframe src="https://drive.google.com/file/d/1CsuftunRgwuhH8N4NFVuzby-HFsNq83j/preview" width="640"
                  height="480" allow="autoplay"></iframe>
              </p>
            </section>
            <!-- Section 3 -->

          </div>
          <!-- Akhir konten disini -->
        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>
@endsection