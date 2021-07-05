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
            <h3 class="nk-block-title page-title">{{ Auth::user()->name }} Details</h3>
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
                            <h5>Notice Board</h5>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="datatable-wrap my-3">
                        <table class=" table ">
                            <thead>
                                <tr>
                                    <th style="width: 10%">SL</th>
                                    <th style="width: 20%">Notice Title</th>
                                    <th>Notice Description</th>
                                    <th style="width: 10%">File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notices as $notice)
                                    <tr>
                                        <td>{{ $loop -> index = 1 }}</td>
                                        <td>{{ $notice -> title }}</td>
                                        <td>{{ $notice -> description }}</td>
                                        <td><a target="blank" href="{{ "images/notices/". $notice -> file }}" class="btn btn-outline-success">Download</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-preview">
                <div class="card-inner">
                    <div class="row">
                        <div class="col">
                            <h5>Current Year Payment History</h5>
                        </div>

                    </div>
                    <div class="datatable-wrap my-3">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Payment Type</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($billings as $bill)
                                    @if(Auth::user() -> id == $bill -> user_id)

                                        <tr>
                                            <td>{{ $loop -> index + 1 }}</td>
                                            <td>{{ $bill -> type }}</td>
                                            <td>{{ $bill -> amount }}</td>
                                            <td>{{ date('F m, Y', strtotime($bill -> created_at)) }}</td>
                                        </tr>

                                     @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        <div class="col-md-6">
            <div class="card card-preview">
                <div class="card-inner">
                    <div class="row">
                        <div class="col">
                            <h5>Current Year Status</h5>
                        </div>
                    </div>
                    <div class="datatable-wrap my-3">
                        <table class=" table ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Month</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=1 ; $i<=12 ;$i++)
                                    <tr>
                                        <td>{{ $i}}</td>
                                        <td>{{ \Carbon\Carbon::createFromFormat('m', $i)->format('F')}}</td>
                                        <td>
                                        @if(isset($monthArray[$i]))
                                        Paid
                                        @else
                                        Unpaid
                                        @endif


                                        </td>
                                        <td>
                                            @if(isset($monthArray[$i]))
                                            {{ date('F m, Y', strtotime($monthArray[$i])) }}
                                            @else
                                            --
                                            @endif
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .nk-block -->

@endsection
