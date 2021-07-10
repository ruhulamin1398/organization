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
            <h3 class="nk-block-title page-title">Manage Committee</h3>
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
                <div class="card-header">
                    <h5>Sylhet Engineering Collage</h5>
                </div>
                <div class="card-inner">
                    <div class="datatable-wrap my-3">
                        <table class="datatable-init table ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Campus Name</th>
                                    <th>Designation</th>
                                    <th>Session</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($secs as $sec)
                                    <tr>
                                        <td>{{ $loop -> index + 1 }}</td>
                                        <td>{{ $sec -> name }}</td>
                                        <td>{{ $sec -> campuses -> name }}</td>
                                        <td>{{ $sec -> designation }}</td>
                                        <td>{{ $sec -> session }}</td>
                                        <td>
                                            <a href="{{ route('central.commitee.edit', $sec -> id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form class="d-inline-block" action="{{ route('central.commitee.destroy', $sec -> id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card card-preview">
                <div class="card-header">
                    <h5>Maymonshing  Engineering Collage</h5>
                </div>
                <div class="card-inner">
                    <div class="datatable-wrap my-3">
                        <table class="datatable-init table ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Campus Name</th>
                                    <th>Designation</th>
                                    <th>Session</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mecs as $mec)
                                    <tr>
                                        <td>{{ $loop -> index + 1 }}</td>
                                        <td>{{ $mec -> name }}</td>
                                        <td>{{ $mec -> campuses -> name }}</td>
                                        <td>{{ $mec -> designation }}</td>
                                        <td>{{ $mec -> session }}</td>
                                        <td>
                                            <a href="{{ route('central.commitee.edit', $mec -> id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form class="d-inline-block" action="{{ route('central.commitee.destroy', $mec -> id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card card-preview">
                <div class="card-header">
                    <h5>Foridpur Engineering Collage</h5>
                </div>
                <div class="card-inner">
                    <div class="datatable-wrap my-3">
                        <table class="datatable-init table ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Campus Name</th>
                                    <th>Designation</th>
                                    <th>Session</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fecs as $fec)
                                    <tr>
                                        <td>{{ $loop -> index + 1 }}</td>
                                        <td>{{ $fec -> name }}</td>
                                        <td>{{ $fec -> campuses -> name }}</td>
                                        <td>{{ $fec -> designation }}</td>
                                        <td>{{ $fec -> session }}</td>
                                        <td>
                                            <a href="{{ route('central.commitee.edit', $fec -> id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form class="d-inline-block" action="{{ route('central.commitee.destroy', $fec -> id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card card-preview">
                <div class="card-header">
                    <h5>Borishal  Engineering Collage</h5>
                </div>
                <div class="card-inner">
                    <div class="datatable-wrap my-3">
                        <table class="datatable-init table ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Campus Name</th>
                                    <th>Designation</th>
                                    <th>Session</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($becs as $bec)
                                    <tr>
                                        <td>{{ $loop -> index + 1 }}</td>
                                        <td>{{ $bec -> name }}</td>
                                        <td>{{ $bec -> campuses -> name }}</td>
                                        <td>{{ $bec -> designation }}</td>
                                        <td>{{ $bec -> session }}</td>
                                        <td>
                                            <a href="{{ route('central.commitee.edit', $bec -> id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form class="d-inline-block" action="{{ route('central.commitee.destroy', $bec -> id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card card-preview">
                <div class="card-header">
                    <h5>Central</h5>
                </div>
                <div class="card-inner">
                    <div class="datatable-wrap my-3">
                        <table class="datatable-init table ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Session</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($centrals as $central)
                                    <tr>
                                        <td>{{ $loop -> index + 1 }}</td>
                                        <td>{{ $central -> name }}</td>
                                        <td>{{ $central -> designation }}</td>
                                        <td>{{ $central -> session }}</td>
                                        <td>
                                            <a href="{{ route('central.commitee.edit', $central -> id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form class="d-inline-block" action="{{ route('central.commitee.destroy', $central -> id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
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
