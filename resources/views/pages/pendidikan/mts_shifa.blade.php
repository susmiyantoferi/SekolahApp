@extends('layouts.master_home')

@section('home_content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>MTs Shifa' Kalipare</h2>
        <ol>
          <li><a href="/">Home</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  @if (session('succsess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('succsess') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif


  @if ($mts == null)

  <h3 class="text-center"><span class="text-danger">*</span>Data MTs Shifa' Kalipare Kosong</h3>
  <h3 class="text-center"><span class="text-danger">*</span>Mohon Masukan Data Dibagian Admin Pendidikan</h3>
      
  @else

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>{{ $mts->alamat }}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $mts->email }}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Contact Number:</h4>
                <p>{{ $mts->hp }}</p>
              </div>
            </div>
          </div>

        </div>

     </div>

  </section><!-- End Contact Section -->

  <!-- visi misi Section -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-5 info">
                <h4>Visi:</h4>
                <p>{{ $mts->visi }}</p>
              </div>


              <div class="col-lg-5 info">
                <h4>Misi:</h4>
                <p>{{ $mts->misi }}</p>
              </div>
            </div>
          </div>

        </div>

     </div>

  </section><!-- End visi misi Section -->

  <!-- tujuan Section -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg info">
                <h4>Tujuan:</h4>
                <p>{{ $mts->tujuan }}</p>
              </div>

            </div>
          </div>

        </div>

     </div>

  </section><!-- End tujuan Section -->
      
  @endif

@endsection