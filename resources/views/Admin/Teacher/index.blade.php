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
            <h3 class="nk-block-title page-title">Teacher Amount Details</h3>
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
                    <div class="row justify-content-end mr-2">
                        <form action="{{ route('admin.teacher') }}" class="form-inline">
                            @csrf
                            <div class="form-group mr-1">
                                <input type="month" name="month" class="form-control">
                            </div>
                            <div class="form-group mr-1">
                                <select name="type" id="" class="form-control">
                                    <option value="all">All</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Search" class="btn  btn-outline-dark">
                            </div>
                        </form>
                   </div>
                    <div class="datatable-wrap my-3">
                        <table class="datatable-init table ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Pay Months</th>
                                    <th>Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                    <tr class="odd">
                                        <td>{{ $loop -> index + 1 }}</td>
                                        <td>{{$teacher -> name }}</td>
                                        <td>{{ $teacher -> phone }}</td>
                                        <td>{{ $teacher -> months }}</td>
                                        <td>{{ $teacher -> totalAmount }}</td>
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
