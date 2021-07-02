@extends('Admin.app')

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
            <h3 class="nk-block-title page-title">Teacher Fees</h3>
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
                    <div class="datatable-wrap my-3">
                        <table class="datatable-init table ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Monthly</th>
                                    <th>Central</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>{{ $fees -> monthly }}</td>
                                    <td>{{ $fees -> central }}</td>
                                    <td><a href="{{ route('admin.fees.edit', $fees -> id) }}" class="btn btn-primary">Edit</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .nk-block -->

@endsection
