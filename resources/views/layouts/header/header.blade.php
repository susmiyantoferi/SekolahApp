<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">Pesantren <span>shirothul fuqoha' II</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>

          {{-- <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li> --}}

          <li class="{{ request()->is('daftar') ? 'active' : '' }}"><a href="{{ route('daftar') }}">Pendaftaran</a></li>
          <li class="{{ request()->is('portofolio') ? 'active' : '' }}"><a href="{{ route('portofolio') }}">Portfolio</a></li>
          {{-- <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li> --}}
          <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>

          <li class="drop-down"><a href="#">Pendidikan</a>
            <ul>
              <li class="{{ request()->is('tasywidul') ? 'active' : '' }}"><a href="{{ route('tasywidul') }}">RA Tasywidul Arifin</a></li>
              <li class="{{ request()->is('mtsshifa') ? 'active' : '' }}"><a href="{{ route('mtsshifa') }}">MTs Shifa' Kalipare</a></li>
              <li class="{{ request()->is('smkshifa') ? 'active' : '' }}"><a href="{{ route('smkshifa') }}">SMK Shifa' Kalipare</a></li>
              <li class="{{ request()->is('rtqusman') ? 'active' : '' }}"><a href="{{ route('rtqusman') }}">RTQ Utsmaniyah</a></li>
              <li class="{{ request()->is('diniyah') ? 'active' : '' }}"><a href="{{ route('diniyah') }}">Madrasah Diniyah Shirotul Fuqoha' II</a></li>
            </ul>
          </li>

          <li><a href="{{ route('login') }}" target="_blank">Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        {{-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a> --}}
        {{-- <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a> --}}
      </div>

    </div>
  </header><!-- End Header -->