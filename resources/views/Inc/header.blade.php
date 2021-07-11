<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Organization</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/') }}">Home</a></li>
          <li><a href="#services">Notice</a></li>
          <li><a href="#portfolio">About</a></li>
          <li class="drop-down"><a >Commitee</a>
            <ul>
              <li><a href="{{ route('front.central-commitee') }}">Central Commitee</a></li>
              <li><a href="{{ route('front.sec-commitee') }}">SEC Commitee</a></li>
              <li><a href="{{ route('front.mec-commitee') }}">MEC Commitee</a></li>
              <li><a href="{{ route('front.fec-commitee') }}">FEC Commitee</a></li>
              <li><a href="{{ route('front.bec-commitee') }}">BEC Commitee</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header>
