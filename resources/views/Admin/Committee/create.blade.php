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
            <h3 class="nk-block-title page-title">Add Committee</h3>
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
                    <form action="{{ route('central.commitee.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Committee Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Campus</label>
                                    <div class="form-control-wrap">
                                        <select name="campus_id" id="" class="form-control">
                                            <option value="1">SEC</option>
                                            <option value="2">MEC</option>
                                            <option value="3">FEC</option>
                                            <option value="4">BEC</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Position</label>
                                    <div class="form-control-wrap">
                                        <input type="number" name="position" id="" class="form-control" placeholder="Position">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Designation</label>
                                    <div class="form-control-wrap">
                                        <input class="form-control" type="text" name="designation" id="" placeholder="Designation">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Session</label>
                                    <div class="form-control-wrap">
                                        <input class="form-control" type="text" name="session" id="" placeholder="Session">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                       <div class="row">
                           <div class="col">
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Add Committee">
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
