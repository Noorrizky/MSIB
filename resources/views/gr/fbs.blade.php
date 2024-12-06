@extends('grlayout')

@section('konten')
<main class="main">

<!-- Page Title -->
<div class="page-title accent-background">
  <div class="container">
    <h1>FOOD & BEVERAGE SERVICE Golden Rule</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="current">FOOD & BEVERAGE SERVICE Golden Rule</li>
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
          <a href="#FOOD & BEVERAGE SERVICE">F&B SERVICE</a>
          <a href="#OUTLET CASHIERS">OUTLET CASHIERS</a>
          <a href="#Manager Opening & Closing Checklist">Manager’s Opening & Closing Checklist</a>
          <a href="#HANDLING BABIES">HANDLING BABIES</a>
        </div>

        <!-- <h4>Judul</h4> -->
        <!-- <p>Isi</p> -->
      </div>



      <!-- Isi content disini -->
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
        <!-- <img src="assets/img/services.jpg" alt="" class="img-fluid services-img"> -->

        <!-- Section 1 -->
        <section id="FOOD & BEVERAGE SERVICE">
          <h3>F&B Golden Rules</h3>
          <p>
            <iframe src="https://drive.google.com/file/d/1wvT2hdhnSJRdYmmSSyF1u-e0gHwp8zIU/preview" width="640"
              height="480" allow="autoplay"></iframe>
          </p>
        </section>
        <!-- Section 1 -->

        <!-- Section 2 -->
        <section id="OUTLET CASHIERS">
          <h3>OUTLET CASHIERS Golden Rules</h3>
          <p>
            <iframe src="https://drive.google.com/file/d/1aSVK_vwU6o7ff-JBzxRxtxXkjPCi9qaH/preview" width="640"
              height="480" allow="autoplay"></iframe>
          </p>
        </section>
        <!-- Section 2 -->

        <!-- Section 3 -->
        <section id="Manager Opening & Closing Checklist">
          <h3>Manager’s Opening & Closing Checklist</h3>
          <p>
            <iframe src="https://drive.google.com/file/d/1rdDb43KZt_KWi9ZXt2xJdjBmv197UIZ5/preview" width="640"
              height="480" allow="autoplay"></iframe>
          </p>
        </section>
        <!-- Section 3 -->

        <!-- Section 4 -->
        <section id="HANDLING BABIES">
          <h3>HANDLING BABIES</h3>
          <p>
            <iframe src="https://drive.google.com/file/d/1RA9F7cSEOJYfiLMFl6bhUDDDJQv-f0Ye/preview" width="640"
              height="480" allow="autoplay"></iframe>
          </p>
        </section>
        <!-- Section 4 -->

      </div>
      <!-- Akhir konten disini -->
    </div>

  </div>

</section><!-- /Service Details Section -->

</main>
@endsection