@extends('app')

@section('title', 'Home - Organization')

@section('content')

<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>One Page Bootstrap Website Template</h1>
          <h2>We are team of talented designers</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About Us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Notice Section ======= -->
    <section id="notice" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Notice</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row mt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Campus</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notices as $notice)
                        <tr>
                            <th>{{ $loop -> index + 1 }}</th>
                            <th>{{ $notice -> title }}</th>
                            <td>{{ $notice -> description }}</td>
                            <td>{{ $notice -> campus -> name }}</td>
                            <td>
                                <a class="btn btn-sm btn-success" href="{{ asset('images/notices/'. $notice -> file) }}">Download</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

      </div>
    </section><!-- End Sevices Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title mb-3">
            <h2>Central Commitee</h2>
            <p class="mb-5">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            <a class="btn btn-primary btn-sm" href="{{ route('front.central-commitee') }}">Sentral Commitee</a>
            <a class="btn btn-primary btn-sm" href="{{ route('front.sec-commitee') }}">Sec Commitee</a>
            <a class="btn btn-primary btn-sm" href="{{ route('front.mec-commitee') }}">Mec Commitee</a>
            <a class="btn btn-primary btn-sm" href="{{ route('front.fec-commitee') }}">Fec Commitee</a>
            <a class="btn btn-primary btn-sm" href="{{ route('front.bec-commitee') }}">Bec Commitee</a>
        </div>

        <div class="row">

          @foreach ($centrals as $central)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                <div class="member-img">
                    <img src="theme/frontend/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                    <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info">
                    <h4>{{ $central -> name }}</h4>
                    <span>{{ $central -> designation }}</span>
                    <p>{{ $central -> session }}</p>
                </div>
                </div>
            </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Team Section -->

  </main>
@endsection
