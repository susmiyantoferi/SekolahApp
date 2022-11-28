@extends('layouts.master_home')
@include('layouts.header.slider')

    @section('home_content')

    @if ($abouts == null)

    <h3 class="text-center"><span class="text-danger">*</span>About Pesantren Shirotul Fuqoha' II Kosong</h3>
    <h3 class="text-center"><span class="text-danger">*</span>Mohon Masukan Data Dibagian Admin Home About</h3>
        
    @else

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>{{ $abouts->title }}</h2>
            <h3>{{ $abouts->short_discrp }}</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
              {{ $abouts->long_discrp }}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
        
    @endif
        
  
      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
          </div>
  
  
          <div class="row portfolio-container" data-aos="fade-up">
            
            @foreach ($images as $img)
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ $img->image }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a href="{{ $img->image }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"></i></a>
              </div>
            </div>

            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->
  
      <!-- ======= Our Clients Section ======= -->
      <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Brands</h2>
          </div>
  
          <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
            
            @foreach ($brands as $brand)
            <div class="col-lg-3 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ $brand->brand_image }}" class="img-fluid" alt="">
              </div>
            </div>
            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Our Clients Section -->

      @endsection