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
            <h3 class="nk-block-title page-title">Committe Edit</h3>
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
                    <form action="{{ route('central.commitee.update', $committie -> id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Committee Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" class="form-control" value="{{ $committie -> name }}" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Campus</label>
                                    <div class="form-control-wrap">
                                        <select name="campus_id" id="" class="form-control">
                                            <option value="1" {{ $committie -> position == 1 ? 'selected' : '' }}>SEC</option>
                                            <option value="2" {{ $committie -> position == 2 ? 'selected' : '' }}>MEC</option>
                                            <option value="3" {{ $committie -> position == 3 ? 'selected' : '' }}>FEC</option>
                                            <option value="4" {{ $committie -> position == 4 ? 'selected' : '' }}>BEC</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Position</label>
                                    <div class="form-control-wrap">
                                        <input type="number" name="position" id="" class="form-control" placeholder="Position" value="{{ $committie -> position }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Designation</label>
                                    <div class="form-control-wrap">
                                        <input class="form-control" type="text" name="designation" id="" placeholder="Designation" value="{{ $committie -> designation }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Session</label>
                                    <div class="form-control-wrap">
                                        <input class="form-control" type="text" name="session" id="" placeholder="Session"  value="{{ $committie -> session }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                       <div class="row">
                           <div class="col">
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Update committiee">
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
