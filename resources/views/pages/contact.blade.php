@extends('layouts.master_home')

@section('home_content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Contact</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Contact</li>
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

  <!-- ======= Contact Section ======= -->
  <div class="map-section">
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126362.6528723932!2d112.37800679833987!3d-8.219553590188776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78a292d37d983b%3A0x5049b95293435d0c!2sPesantren%20Shirotul%20Fuqoha&#39;%20II!5e0!3m2!1sid!2sid!4v1670676764708!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>  
  </div>

  <section id="contact" class="contact">
    <div class="container">

    @if ($contacts == null)

    <h3 class="text-center"><span class="text-danger">*</span>Data Contact Pesantren Shirotul Fuqoha' II Kosong</h3>
    <h3 class="text-center"><span class="text-danger">*</span>Mohon Masukan Data Dibagian Admin Contact Page</h3>
        
    @else

    <div class="row justify-content-center" data-aos="fade-up">

      <div class="col-lg-10">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-4 info">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>{{ $contacts->address }}</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>{{ $contacts->email }}</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>{{ $contacts->phone }}</p>
            </div>
          </div>
        </div>

      </div>

    </div>
        
    @endif

      
      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <h5 class="text-center"><span class="text-danger">*</span>Pesan Dan Masukan</h5>
        <div class="col-lg-10">
          <form action="{{ route('contact.form') }}" method="post">
            @csrf
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" />
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email" />
                
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject"  placeholder="Subject" />
             
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5"  placeholder="Message"></textarea>
              
            </div>
            
            <button class="btn btn-success" type="submit">Send Message</button>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

@endsection