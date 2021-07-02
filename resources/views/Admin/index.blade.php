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
            <h3 class="nk-block-title page-title">Teacher Payment</h3>
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
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Due</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                    <tr class="odd">
                                        <td>{{ $loop -> index + 1 }}</td>
                                        <td>{{ $teacher -> name }}</td>
                                        <td>{{ $teacher -> phone }}</td>
                                        <td>{{ $teacher -> due }}</td>
                                        <td>
                                            <form action="{{ route('admin.storeBilling') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <input type="hidden" value="{{ $teacher -> id }}" name="user_id">
                                                        <input class="form-control" type="text" name="amount">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="submit" class="btn btn-primary" value="Pay">
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
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
