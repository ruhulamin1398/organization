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
                    <form action="{{ route('admin.fees.update', $fees -> id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Monthly Fees</label>
                                    <input type="text" name="monthly" class="form-control" value="{{ $fees -> monthly }}"">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="">Central Fees</label>
                                    <input type="text" name="central" class="form-control" value="{{ $fees -> central }}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update" class="btn btn-primary">
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
