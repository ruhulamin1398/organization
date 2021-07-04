@extends('Admin.app')

@section('title', 'Organaization - Notice Management')

@section('css')
    <style>
       .datatable-init tbody tr td{
            vertical-align: middle !important;
        }
    </style>
@endsection

@section('content')

<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Teacher Amount Details</h3>
            {{-- <div class="nk-block-des text-soft">
                <p>Welcome to DashLite Dashboard Template.</p>
            </div> --}}
        </div><!-- .nk-block-head-content -->
    </div><!-- .nk-block-between -->
</div><!-- .nk-block-head -->
<div class="nk-block">
    <div class="row g-gs">
        <div class="col-xxl-6">

            {{-- Data Table --}}
            @include('Admin.validation')

            <div class="card card-preview">
                <div class="card-inner">
                    <a href="{{ route('admin.notice.create') }}" class="btn btn-primary">All Notice</a>
                    <div class="datatable-wrap my-3">
                        <table class="datatable-init table ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Campus Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notices as $notice)
                                    <tr class="odd">
                                        <td>{{ $loop -> index + 1 }}</td>
                                        <td>{{ $campus -> name }}</td>
                                        <td>{{ $notice ->  title}}</td>
                                        <td>{{ $notice -> description }}</td>
                                        <td>
                                            <img style="width: 120px" src="{{ asset('images/notices/') }}/{{ $notice -> file }}" alt="">
                                        </td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('admin.notice.edit', $notice -> id) }}" class="btn btn-primary">Edit</a>

                                                <form class="ml-1" action="{{ route('admin.notice.destroy', $notice -> id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input class="btn btn-danger d-inline-block" type="submit" value="Delete" onclick="return confirm('Are you sure to delete !!');">
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .nk-block -->

@endsection
