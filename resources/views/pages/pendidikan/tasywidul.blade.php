@extends('layouts.master_home')

@section('home_content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>RA Tasywidul Arifin</h2>
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

  @if ($data == null)

  <h3 class="text-center"><span class="text-danger">*</span>Data RA Tasywidul Arifin Kosong</h3>
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
                <p>{{$data->alamat}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{$data->email}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Contact Number:</h4>
                <p>{{$data->hp}}</p>
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
                <p>{{$data->visi}}</p>
              </div>


              <div class="col-lg-5 info">
                <h4>Misi:</h4>
                <p>{{$data->misi}}</p>
              </div>
            </div>
          </div>

        </div>

     </div>

  </section><!-- End visi misi Section -->

  <!-- Tujuan Section -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg info">
                <h4>Tujuan:</h4>
                <p>{{$data->tujuan}}</p>
              </div>
            </div>
          </div>

        </div>

     </div>

  </section><!-- End Tujuan Section -->
      
  @endif

  

@endsection