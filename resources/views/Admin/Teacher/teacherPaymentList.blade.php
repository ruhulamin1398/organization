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
            <h3 class="nk-block-title page-title">Teacher Payment Request</h3>
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
                        <table class=" table ">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Comment</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $pay)
                                    <tr>
                                        <td>{{ $pay -> name }}</td>
                                        <td>{{ $pay -> amount }}</td>
                                        <td>{{ $pay -> type }}</td>
                                        <td>{{ $pay -> comment }}</td>
                                        <td>
                                            @if ($pay -> status == 'accepted')
                                                <span class="badge badge-success">{{ $pay -> status }}</span>
                                            @elseif($pay -> status == 'rejected')
                                                 <span class="badge badge-danger">{{ $pay -> status }}</span>
                                            @else
                                                <span class="badge badge-warning">{{ $pay -> status }}</span>
                                            @endif

                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('admin.teacher-payment-accepted', $pay -> id)  }}" class="btn btn-success btn-sm">Accept</a>
                                            <a href="{{ route('admin.teacher-payment-rejected', $pay -> id) }}" class="btn btn-danger btn-sm">Reject</a> --}}
                                            <form action="{{ route('admin.payment.update', $pay -> id) }}" method="POST">
                                                @csrf
                                               <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Comment" name="comment" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select name="status" id="" class="form-control">
                                                            <option value="accepted">Accepted</option>
                                                            <option value="rejected">Rejected</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="submit" class="btn btn-sm btn-primary">
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
        </div>
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .nk-block -->
{{-- <div class="modal" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Payment Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="">
                    <div class="form-group">
                        <label for="">Comment</label>
                        <input type="text" name="comment" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="accepted">Accepted</option>
                            <option value="accepted">Rejected</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-primary">
                    </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> --}}

@endsection
