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
            <h3 class="nk-block-title page-title">Teacher Payment List</h3>
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
                        <table class=" table ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Transection Number</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $pay)
                                    <tr>
                                        <th>{{ $loop -> index + 1 }}</th>
                                        <td>{{ $pay -> name }}</td>
                                        <td>{{ $pay -> phone }}</td>
                                        <td>{{ $pay -> transection_number }}</td>
                                        <td>{{ $pay -> amount }}</td>
                                        <td>
                                            @if ($pay -> status == 'accepted')
                                                <span class="badge badge-success">{{ $pay -> status }}</span>
                                            @elseif($pay -> status == 'rejected')
                                                 <span class="badge badge-danger">{{ $pay -> status }}</span>
                                            @else
                                                <span class="badge badge-warning">{{ $pay -> status }}</span>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('admin.teacher-payment-accepted', $pay -> id)  }}" class="btn btn-success btn-sm">Accept</a>
                                            <a href="{{ route('admin.teacher-payment-rejected', $pay -> id) }}" class="btn btn-danger btn-sm">Reject</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .nk-block -->

@endsection
