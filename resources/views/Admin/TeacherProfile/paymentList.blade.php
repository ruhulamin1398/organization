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
            <h3 class="nk-block-title page-title">{{ Auth::user()->name }} Payment Details</h3>
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
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Payment List</h5>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="datatable-wrap my-3">
                        <table class=" table ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Transection Number</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Updated Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payment_list as $list)
                                   <tr>
                                        <th>{{ $loop -> index + 1 }}</th>
                                        <td>{{ $list -> transection_number }}</td>
                                        <td>{{ $list -> amount }}</td>
                                        <td>
                                            @if ($list -> status == 'accepted')
                                                <span class="badge badge-success">{{ $list -> status }}</span>
                                            @elseif($list -> status == 'rejected')
                                                 <span class="badge badge-danger">{{ $list -> status }}</span>
                                            @else
                                                <span class="badge badge-warning">{{ $list -> status }}</span>
                                            @endif

                                        </td>
                                        <td>{{ date('F m, Y', strtotime($list -> created_at)) }}</td>
                                        <td>{{ date('F m, Y', strtotime($list -> updated_at)) }}</td>
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
