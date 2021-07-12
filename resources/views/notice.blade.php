@extends('app')

@section('title', 'Home - Organization')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Notice</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Notice</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Notice</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.<br> Sit sint consectetur velit. Quisquam quos quisquam </p>
            </div>

            <div class="row mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 5%">#</th>
                            <th style="width: 15%">Title</th>
                            <th style="width: 45%">Description</th>
                            <th style="width: 20%">Campus</th>
                            <th style="width: 15%">File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notices as $notice)
                            <tr>
                                <th>{{ $loop -> index + 1 }}</th>
                                <td>{{ $notice -> title }}</td>
                                <td>{{ $notice -> description }}</td>
                                <td>{{ $notice -> campus -> name }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="{{ asset('images/notices/'. $notice -> file) }}">Download</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $notices->links() }}
            </div>

        </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->
@endsection
