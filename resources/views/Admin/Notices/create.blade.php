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
            <h3 class="nk-block-title page-title">Create Notice</h3>
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
                    <form action="{{ route('admin.notice.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $campus -> id }}">
                        <div class="form-group">
                            <label class="form-label" for="default-01">Notice Title</label>
                            <div class="form-control-wrap">
                                <input type="text" name="title" class="form-control" id="default-01" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="default-06">Photo / Video</label>
                            <div class="form-control-wrap">
                               <div class="custom-file">
                                  <input type="file" name="image" multiple="" class="custom-file-input" id="customFile">
                                  <label class="custom-file-label" for="customFile">Choose file</label>
                               </div>
                            </div>
                         </div>
                        <div class="form-group">
                            <label class="form-label" for="default-02">Notice Description</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="description" id="default-textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Add Notice">
                        </div>
                    </form>
                </div>
            </div>



        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .nk-block -->

@endsection
