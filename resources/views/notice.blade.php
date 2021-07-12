@extends('app')

@section('title', 'Home - Organization')
@section('css')
<style>
  .flex.justify-between.flex-1.sm\:hidden {
	margin-top: 10px;
	margin-bottom: 10px;
}
.relative.z-0.inline-flex.shadow-sm.rounded-md {
	display: none !important;
}
</style>
@endsection
@section('content')

  <main id="main">


    <!-- ======= Team Section ======= -->
    <section id="team" class="mt-5 team section-bg">
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
                            <th   class="d-none d-md-block" style="width: 45%">Description</th>
                            <th style="width: 20%">Campus</th>
                            <th style="width: 15%">File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notices as $notice)
                            <tr>
                                <th>{{ $loop -> index + 1 }}</th>
                                <td>{{ $notice -> title }}</td>
                                <td class="d-none d-md-block">{{ $notice -> description }}</td>
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
