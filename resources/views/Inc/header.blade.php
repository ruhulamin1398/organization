<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('/') }}">Organization</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ url('/#about') }}">About</a></li>
          <li><a href="{{ route('front.central-commitee') }}">Central</a></li>
          <li><a href="{{ route('front.sec-commitee') }}">SEC</a></li>
          <li><a href="{{ route('front.mec-commitee') }}">MEC</a></li>
          <li><a href="{{ route('front.fec-commitee') }}">FEC</a></li>
          <li><a href="{{ route('front.bec-commitee') }}">BEC</a></li>
          <li><a href="{{ url('/#notice') }}">Notice</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{ route('login') }}" class="get-started-btn scrollto">Login</a>

    </div>
  </header>
