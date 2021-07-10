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
            <h3 class="nk-block-title page-title">Central Fee Payment</h3>
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
                    <form action="{{ route('user.payment-store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Transection Number</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="t_number" class="form-control" placeholder="Transection Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Amount</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="amount" class="form-control" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                       <div class="row">
                           <div class="col">
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Pay Fee">
                                </div>
                           </div>
                       </div>
                    </form>
                </div>
            </div>

        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .nk-block -->

@endsection
