@extends('grlayout')

@section('konten')
<main class="main">
  <!-- Page Title -->
  <div class="page-title accent-background">
    <div class="container">
      <h1>Sales & Marketing Golden Rule</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li class="current">Sales & Marketing Golden Rule</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Halaman Dalam Pengembangan</h4>
            <p>Mohon maaf, halaman ini masih dalam tahap pengembangan dan belum tersedia untuk saat ini.</p>
            <p>Silakan kembali lagi nanti.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection