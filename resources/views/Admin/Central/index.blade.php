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
            <h3 class="nk-block-title page-title">Central Fee Payment Request</h3>
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
                                    <th>SL</th>
                                    <th>Transection Number</th>
                                    <th>Amount</th>
                                    <th>Status</th> 
                                    <th>Admin Comment</th>
                                    <th>Payment Date</th>
                                    <th>Updated Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payment_request as $payment)
                                   <tr>
                                        <th>{{ $loop -> index + 1 }}</th>
                                        <td>{{ $payment -> t_number }}</td>
                                        <td>{{ $payment -> amount }}</td>
                                        <td>
                                            @if ($payment -> status == 'accepted')
                                                <span class="badge badge-success">{{ $payment -> status }}</span>
                                            @elseif($payment -> status == 'rejected')
                                                 <span class="badge badge-danger">{{ $payment -> status }}</span>
                                            @else
                                                <span class="badge badge-warning">{{ $payment -> status }}</span>
                                            @endif

                                        </td>
                                        <td>
                                            @if ($payment -> central_comment)
                                                <span>{{ $payment -> central_comment }}</span>
                                            @else
                                                <span>--</span>
                                            @endif

                                        </td>
                                        <td>{{ date('F m, Y', strtotime($payment -> created_at)) }}</td>
                                        <td>{{ date('F m, Y', strtotime($payment -> updated_at)) }}</td>
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
