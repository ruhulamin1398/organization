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
                    <form action="{{ route('admin.central-store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::user() -> id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Transaction Number</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="t_number" class="form-control" id="default-01" placeholder="Transaction Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Amount</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="amount" class="form-control" id="default-01" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Comment</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="comment" class="form-control" id="default-01" placeholder="Comment">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Total Due</label>
                                    <h3>{{ $due_central_fee }}</h3>
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
