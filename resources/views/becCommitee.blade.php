@extends('app')

@section('title', 'Home - Organization')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>BEC Commitee</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>BEC Commitee</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>BEC Commitee</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.<br> Sit sint consectetur velit. Quisquam quos quisquam </p>
            </div>

            <div class="row">
                @foreach ($becs as $bec)
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
                            <h4>{{ $bec -> name }}</h4>
                            <span>{{ $bec -> designation }}</span>
                            <p>{{ $bec -> session }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

        </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->
@endsection
