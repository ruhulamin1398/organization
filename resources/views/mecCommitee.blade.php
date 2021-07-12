@extends('app')

@section('title', 'Home - Organization')

@section('content')

  <main id="main">


    <!-- ======= Team Section ======= -->
    <section id="team" class="mt-5 team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>MEC Commitee</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.<br> Sit sint consectetur velit. Quisquam quos quisquam </p>
            </div>

            <div class="row">

            @foreach ($mecs as $mec)
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
                            <h4 class="text-dark" style="font-size: 24px">{{ $mec -> designation }}</h4>
                            <h4>{{ $mec -> name }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>

        </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->
@endsection
